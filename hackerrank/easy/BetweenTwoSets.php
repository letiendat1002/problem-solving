<?php

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function getTotalX($a, $b) {
    // Write your code here
    $mina = min($a);
    $minb = min($b);
    $result = 0;
    $temp = $mina > $minb;
    $maxofmin = $temp ? $mina : $minb;
    $i = $temp ? $minb : $mina;
    $aa = [];
    while ($i <= $maxofmin){
        $even = true;
        foreach($a as $item){
            if ($i % $item !== 0){
                $even = false;
            }
        }
        if ($even){
            $aa[] = $i;
        }
        $i++;
    }
    foreach($aa as $item){
        $even = true;
        foreach($b as $itemb){
            if ($itemb % $item !== 0){
                $even = false;
            }
        }
        if ($even){
            $result++;
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($arr, $brr);

fwrite($fptr, $total . "\n");

fclose($fptr);
