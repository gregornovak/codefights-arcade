<?php

function isLucky($n) {
    $n = (string)$n;
    $length = strlen($n);
    
    $left = str_split(substr($n, 0, $length / 2));
    $right = str_split(substr($n, $length / 2));
    
    $leftSum = 0;
    $rightSum = 0;
    
    foreach($left as $value) {
        $leftSum += $value;
    }
    
    foreach($right as $value) {
        $rightSum += $value;
    }
    
    return $leftSum === $rightSum;
}

$n = 1230;
var_dump(isLucky($n));