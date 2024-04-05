<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s)
{
  // Write your code here
  $time = explode(":", $s);
  $hour = $time[0];
  $minute = $time[1];
  $second = substr($time[2], 0, 2);
  $period = substr($time[2], 2, 2);

  if ($period == "PM") {
    if ($hour != 12) {
      $hour += 12;
    }
  } else {
    if ($hour == 12) {
      $hour = "00";
    }
  }

  return $hour . ":" . $minute . ":" . $second;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
