<?php


/**
 * Given two strings, find the number of common characters between them.
 * 
 * Example:
 * For s1 = "aabcc" and s2 = "adcaa", the output should be commonCharacterCount(s1, s2) = 3. 
 * Strings have 3 common characters - 2 "a"s and 1 "c".
 */
function commonCharacterCount($s1, $s2) {
    $common = 0;
    
    $s1Array = [];
    for($i = 0; $i < strlen($s1); $i++) {
        if(array_key_exists($s1[$i], $s1Array)) {
            $s1Array[$s1[$i]]++;
        } else {
            $s1Array[$s1[$i]] = 1;
        }
    }
    
    $s2Array = [];
    for($i = 0; $i < strlen($s2); $i++) {
        if(array_key_exists($s2[$i], $s2Array)) {
            $s2Array[$s2[$i]]++;
        } else {
            $s2Array[$s2[$i]] = 1;
        }
    }
    
    foreach($s1Array as $key => $value) {
        if(array_key_exists($key, $s2Array)) {
            $common += ($s1Array[$key] < $s2Array[$key]) ? $s1Array[$key] : $s2Array[$key];
        }
    }
    
    return $common;
}

$first = "aabcc";
$second = "adcaa";
echo commonCharacterCount($first, $second);