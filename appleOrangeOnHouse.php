<?php

/*
 * Complete the 'countApplesAndOranges' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER s
 *  2. INTEGER t
 *  3. INTEGER a
 *  4. INTEGER b
 *  5. INTEGER_ARRAY apples
 *  6. INTEGER_ARRAY oranges
 */

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // Write your code here
       $appleOnHouse  = 0 ;
       $orangeOnHouse = 0 ;
   for($i = 0 ; $i < count($apples) ; $i++ ){
      
      $apples[$i]  += $a ;
      
      
      if ($s<= $apples[$i] && $apples[$i] <=$t) {
          $appleOnHouse ++ ;
      }
      
   }
   
   
   for($i = 0 ; $i < count($oranges) ; $i++ ){
       $oranges[$i] += $b ;
       if($s<= $oranges[$i]   && $oranges[$i] <=$t){
          $orangeOnHouse ++ ;
        }
      
       
   }
   
   return  print_r($appleOnHouse."\n".$orangeOnHouse);
       
}


 //solved by Shakil khan 
// if you interested to solve it on hackerRank  its name is apple and orange can be found on algorithm preparations problems ;
//  //these line in below is already on hackerrank solving templete   just follow initialization of countApplesAndOranges($s, $t, $a, $b, $apples, $oranges){} 


$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$s = intval($first_multiple_input[0]);

$t = intval($first_multiple_input[1]);

$second_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$a = intval($second_multiple_input[0]);

$b = intval($second_multiple_input[1]);

$third_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$m = intval($third_multiple_input[0]);

$n = intval($third_multiple_input[1]);

$apples_temp = rtrim(fgets(STDIN));

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

$oranges_temp = rtrim(fgets(STDIN));

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);
