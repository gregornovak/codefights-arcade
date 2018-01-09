<?php

/**
 * Several people are standing in a row and need to be divided into two teams. 
 * The first person goes into team 1, the second goes into team 2, the third goes into team 1 again, the fourth into team 2, and so on.
 * You are given an array of positive integers - the weights of the people. 
 * Return an array of two integers, where the first element is the total weight of team 1, 
 * and the second element is the total weight of team 2 after the division is complete.
 * 
 * For a = [50, 60, 60, 45, 70], the output should be alternatingSums(a) = [180, 105].
 */
function alternatingSums($a) {
    $count = count($a);
    $arr = [0,0];
    for($i = 0; $i < $count; $i++) {
        if($i % 2 === 0) {
            $arr[0] += $a[$i];
        } else {
            $arr[1] += $a[$i];
        }
    }
    return $arr;
}
$a = [50,60,10,90,15,22];
var_dump(alternatingSums($a));