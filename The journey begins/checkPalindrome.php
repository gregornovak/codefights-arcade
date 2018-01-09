<?php

/**
 * Given the string, check if it is a palindrome.
 * Basically if it is a palindrome, the word should be the same from both sides.
 * 
 * Examples:
 * For inputString = "aabaa", the output should be checkPalindrome(inputString) = true;
 * For inputString = "abac", the output should be checkPalindrome(inputString) = false;
 * For inputString = "a", the output should be checkPalindrome(inputString) = true.
 */
function checkPalindrome($inputString) {
    $reversed = '';
    for($i = strlen($inputString) - 1; $i >= 0; $i--) {
        $reversed .= $inputString[$i];
    }
    
    if($inputString === $reversed) {
         return true;
    }
    
    return false;
}

$string = "aabaa";
var_dump(checkPalindrome($string));