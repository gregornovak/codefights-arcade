<?php

/**
 * Given an array of integers, find the maximal absolute difference between any two of its adjacent elements.
 * 
 * Example:
 * For inputArray = [2, 4, 1, 0], the output should be arrayMaximalAdjacentDifference(inputArray) = 3.
 */
function arrayMaximalAdjacentDifference($inputArray) {
    $maxDiff = $inputArray[0] - $inputArray[1];
    $count = count($inputArray) - 1;
    for($i = 0; $i < $count; $i++) {
        $tempDiff = $inputArray[$i] - $inputArray[$i + 1];
        $tempDiff = abs($tempDiff);
        if($tempDiff > $maxDiff) { 
            $maxDiff = $tempDiff;
        }
    }
    return $maxDiff;
}

$arr = [-15, 4, 1, 0];
echo arrayMaximalAdjacentDifference($arr);
