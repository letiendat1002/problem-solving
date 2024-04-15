<?php

/*
 * Complete the 'migratoryBirds' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function migratoryBirds($arr) {
  // Write your code here
  $type1 = array_filter($arr, static function($v) { return $v === 1; });
  $type2 = array_filter($arr, static function($v) { return $v === 2; });
  $type3 = array_filter($arr, static function($v) { return $v === 3; });
  $type4 = array_filter($arr, static function($v) { return $v === 4; });
  $type5 = array_filter($arr, static function($v) { return $v === 5; });

  $types = [$type1, $type2, $type3, $type4, $type5];
  $maxArr = 1;
  $maxValue = 0;
  foreach ($types as $i => $iValue) {
    if(count($iValue) > $maxValue) {
      $maxValue = count($iValue);
      $maxArr = $i + 1;
    }
  }
  return $maxArr;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
