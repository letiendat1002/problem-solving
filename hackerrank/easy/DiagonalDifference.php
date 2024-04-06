<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr)
{
  // Write your code here
  $left_right = 0;
  $right_left = 0;
  $row = count($arr);
  $index = 0;
  for ($i = 0; $i < $row; $i++) {
    $left_right += $arr[$i][$i];
    $right_left += $arr[$i][$row - $i - 1];
  }

  return abs($left_right - $right_left);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
  $arr_temp = rtrim(fgets(STDIN));

  $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
