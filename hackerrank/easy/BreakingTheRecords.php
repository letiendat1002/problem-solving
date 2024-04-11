<?php
  /*
   * Complete the 'breakingRecords' function below.
   *
   * The function is expected to return an INTEGER_ARRAY.
   * The function accepts INTEGER_ARRAY scores as parameter.
   */

  function breakingRecords($scores)
  {
    // Write your code here
    $min = 0;
    $max = 0;
    $current_max = $scores[0];
    $current_min = $scores[0];

    $length = count($scores);
    for ($i = 1; $i < $length; ++$i) {
      if ($scores[$i] > $current_max) {
        $current_max = $scores[$i];
        $max++;
      }
      if ($scores[$i] < $current_min) {
        $current_min = $scores[$i];
        $min++;
      }
    }
    return [$max, $min];
  }

  $fptr = fopen(getenv("OUTPUT_PATH"), "w");

  $n = intval(trim(fgets(STDIN)));

  $scores_temp = rtrim(fgets(STDIN));

  $scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

  $result = breakingRecords($scores);

  fwrite($fptr, implode(" ", $result) . "\n");

  fclose($fptr);
