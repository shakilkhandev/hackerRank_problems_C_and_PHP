<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr , $n) {
    // Write your code here
     $pos = 0  ; $neg = 0 ; $zero = 0 ; $arr_length=0 ;
     foreach ($arr as $element){

      if($element>0){
            
               $pos++ ;
                
      }else if($element<0){
                 
                  $neg++ ;
              
      }else{
          
                    $zero++ ;
                    
           }
         
     }
     $arr_length = $n ;
     $ratioOfPos = number_format($pos/$arr_length , 6); 
     $ratioOfNeg = number_format($neg/$arr_length , 6); 
     $ratioOfZero = number_format($zero/$arr_length , 6); 
     echo $ratioOfPos,"\n" ;     
     echo $ratioOfNeg."\n" ;     
     echo $ratioOfZero."\n";     
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval',explode(" ",$arr_temp));

plusMinus($arr,$n);
