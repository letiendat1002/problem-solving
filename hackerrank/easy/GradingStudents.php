<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades)
{
  // Write your code here
  $ans = [];
  foreach ($grades as $grade) {
    if ($grade < 38) {
      $ans[] = $grade;
    } elseif ($grade + 5 - $grade % 5 - $grade < 3) {
      $ans[] = $grade + 5 - $grade % 5;
    } else {
      $ans[] = $grade;
    }
  }

  return $ans;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
  $grades_item = intval(trim(fgets(STDIN)));
  $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
