<?php

/**
 * Given an array of strings, return another array containing all of its longest strings.
 * 
 * Example:
 * For inputArray = ["aba", "aa", "ad", "vcd", "aba"], the output should be allLongestStrings(inputArray) = ["aba", "vcd", "aba"].
 */
function allLongestStrings($inputArray) {
    $output = [];
    
    for($i = 0; $i < count($inputArray); $i++) {
        if(count($output) === 0) {
            $output[] = $inputArray[$i];
        } else if(strlen($output[0]) < strlen($inputArray[$i])) {
            $output = [];
            $output[] = $inputArray[$i];
        } else if(strlen($output[0]) === strlen($inputArray[$i])) {
            $output[] = $inputArray[$i];
        }
    }
    
    return $output;
}

$arr = ["aba", "aa", "ad", "vcd", "aba"];
var_dump(allLongestStrings($arr));