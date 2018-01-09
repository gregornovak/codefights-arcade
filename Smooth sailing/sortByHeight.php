<?php

/**
 * Some people are standing in a row in a park. There are trees between them which cannot be moved. Your task is to rearrange the people by their heights in a non-descending order without moving the trees.
 * Trees in this case are -1 numbers. -1 should stay at their spot and sort only the remaining numbers.
 * For a = [-1, 150, 190, 170, -1, -1, 160, 180], the output should be sortByHeight(a) = [-1, 150, 160, 170, -1, -1, 180, 190].
 */
function sortByHeight($a) {
    // Bubble sort algorithm for sorting numbers
    for($i = 0; $i < count($a); $i++) {
        for($j = 0; $j < $i; $j++) {
            // If the num is -1 don't change the values in the array
            if($a[$j] > $a[$i] && $a[$j] !== -1 && $a[$i] !== -1) {
                $tmp = $a[$j];
                $a[$j] = $a[$i];
                $a[$i] = $tmp;
            }
        }
    }
    return $a; 
}

$a = [-1,5,1,6,2,-1,78,123,3,0];
var_dump(sortByHeight($a));
