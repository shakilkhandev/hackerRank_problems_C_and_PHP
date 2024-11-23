<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here
      
      list($hour , $min , $sec) = array_map('trim',explode(':',$s));
      
      $p = substr($s , -2);
      
      $sec = str_replace(["AM","PM"],'',$sec);
      
      if($p=="AM" && $hour == "12"){
          $hour = 00 ;
      }
      else if ($p == 'PM' && $hour!=="12"){
                    $hour = $hour+12 ;
      }
     
      return  sprintf("%02d:%02d:%02d",$hour,$min,$sec);
      
}




// $fptr = fopen(getenv("OUTPUT_PATH"), "w");

// $s = rtrim(fgets(STDIN), "\r\n");

$s = "09:22:06PM";

$result = timeConversion($s);
echo $result ;


// fwrite($fptr, $result . "\n");

// fclose($fptr);
