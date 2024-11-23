<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    // Write your code here
    
    $roundGrades = array();
    $checkGrade = 0;
    
    foreach($grades as $grade){
           
            if($grade%5!=0){
                  $checkGrade = $grade;
                    
                          while($checkGrade%5!=0){
                               $checkGrade++ ;
                             }
                  if($checkGrade-$grade <3 && $checkGrade >= 40 ){
                      $grade=$checkGrade;
                      
                   }
             
             }
        
      $roundGrades [] = $grade ; 
    };
    
    return $roundGrades ;

}

 $grades = [38,44,67,64,55,78];         //  1 line .
 print_r (gradingStudents($grades));  //   2  line.


 // // @by Shakil Khan  
// // for HackerRank  remove the comment and remove 1,2  
// $fptr = fopen(getenv("OUTPUT_PATH"), "w");

// $grades_count = intval(trim(fgets(STDIN)));
  
// $grades = array();

// for ($i = 0; $i < $grades_count; $i++) {
//     $grades_item = intval(trim(fgets(STDIN)));
//     $grades[] = $grades_item;
// }

// $result = gradingStudents($grades);

// fwrite($fptr, implode("\n", $result) . "\n");

// fclose($fptr);
