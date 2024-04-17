<?php

/*
 * Complete the 'dayOfProgrammer' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts INTEGER year as parameter.
 */

function dayOfProgrammer($year)
{
  // Write your code here
  $arr = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

  if ($year === 1918) {
    $arr[1] = 15;
    $month = 1;
    $day = 0;
    $total = 0;
    foreach ($arr as $value) {
      if ($total + $value <= 256) {
        $total += $value;
        $month++;
      } else {
        $day = 256 - $total;
        break;
      }
    }
    if ($month < 10) {
      $month = "0" . $month;
    }
    if ($day < 10) {
      $day = "0" . $day;
    }
    return $day . "." . $month . "." . $year;
  }

  if ($year <= 1917) {
    if ($year % 4 === 0) {
      $arr[1] = 29;
    }
    $month = 1;
    $day = 0;
    $total = 0;
    foreach ($arr as $value) {
      if ($total + $value <= 256) {
        $total += $value;
        $month++;
      } else {
        $day = 256 - $total;
        break;
      }
    }
    if ($month < 10) {
      $month = "0" . $month;
    }
    if ($day < 10) {
      $day = "0" . $day;
    }
    return $day . "." . $month . "." . $year;
  }

  if ($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0)) {
    $arr[1] = 29;
  }
  $month = 1;
  $day = 0;
  $total = 0;
  foreach ($arr as $value) {
    if ($total + $value <= 256) {
      $total += $value;
      $month++;
    } else {
      $day = 256 - $total;
      break;
    }
  }
  if ($month < 10) {
    $month = "0" . $month;
  }
  if ($day < 10) {
    $day = "0" . $day;
  }
  return $day . "." . $month . "." . $year;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$year = intval(trim(fgets(STDIN)));

$result = dayOfProgrammer($year);

fwrite($fptr, $result . "\n");

fclose($fptr);
