<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n)
{
  // Write your code here
  for ($i = 1; $i <= $n; $i++) {
    // echo str_repeat(" ", $n - $i) . str_repeat('#', $i) . "\n"; // method 1
    printf("%{$n}s\n", str_repeat("#", $i)); // method 2
  }
}

$n = intval(trim(fgets(STDIN)));

staircase($n);
