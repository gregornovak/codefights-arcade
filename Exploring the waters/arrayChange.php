<?php

/**
 * You are given an array of integers. On each move you are allowed to increase exactly one of its element by one. 
 * Find the minimal number of moves required to obtain a strictly increasing sequence from the input.
 * (Basically: How many steps is required to that the next number in the array is bigger then the previuos one. i < i + 1 < i + 2 ..)
 * Example:
 * For inputArray = [1, 1, 1], the output should be arrayChange(inputArray) = 3.
 */
function arrayChange($inputArray) {
    $count = count($inputArray) - 1;
    $steps = 0;
    for($i = 0; $i < $count; $i++) {
        if($inputArray[$i] >= $inputArray[$i + 1]) {
            $getTo = $inputArray[$i] + 1;
            $next = $getTo - $inputArray[$i + 1];
            $inputArray[$i + 1]  += ($next === 0) ? 1 : $next;
            $steps += ($next === 0) ? 1 : $next;
        }
    }
    return $steps;
}
// $arr = [2, 3, 3, 5, 5, 5, 4, 12, 12, 10, 15]; // 13
$arr = [-1000, 0, -2, 0]; // 5
echo arrayChange($arr);