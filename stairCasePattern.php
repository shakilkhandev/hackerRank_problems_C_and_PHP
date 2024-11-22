<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    // Write your code here
    $space     = " ";
    $symbol    = "#";
    $spaceCount= $n;
    $symbolCount = 0;
    
    
    for($i = 0 ; $i < $n ; $i++){
        
          $symbolCount++;
           $spaceCount--;
          
        for($j=0; $j<$spaceCount; $j++){
            echo $space;
           
        }
           for($k=0; $k < $symbolCount; $k++){
                echo $symbol ;
           }
    
        print_r(PHP_EOL);
      
    }

}

$n = intval(trim(fgets(STDIN)));

staircase($n);
