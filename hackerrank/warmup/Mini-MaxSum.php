<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr)
{
  // Write your code here
  $min = 0;
  $max = 0;

  sort($arr);
  for ($i = 0; $i < count($arr) - 1; $i++) {
    $min += $arr[$i];
    $max += $arr[$i + 1];
  }

  echo $min . " " . $max;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
