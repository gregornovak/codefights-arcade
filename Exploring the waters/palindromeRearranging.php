<?php

/**
 * Given a string, find out if its characters can be rearranged to form a palindrome.
 * A palindrome is a string that reads the same left-to-right and right-to-left.
 * 
 * Example:
 * For inputString = "aabb", the output should be palindromeRearranging(inputString) = true.
 * We can rearrange "aabb" to make "abba", which is a palindrome.
 */

function palindromeRearranging($inputString) {
    $arr = str_split($inputString);
    $count = count($arr);
    $assocArr = [];
    foreach($arr as $key => $value) {
        $assocArr[$value]++;
    }

    $itemsWithOne = 0;
    $itemsWithThree = 0;
    foreach($assocArr as $item) {
        if($item === 1) {
            $itemsWithOne++;
        } else if($item === 3) {
            $itemsWithThree++;
        }
    }
    if(($itemsWithOne > 1) || ($itemsWithOne === 1 && $count % 2 === 0) || ($itemsWithThree > 1) || ($itemsWithThree === 1 && $count % 2 === 0)) {
        return false;
    }
    
    return true;
}


// $str = "abaab"; // true
$str = "bbbaaacc"; // false
var_dump(palindromeRearranging($str));