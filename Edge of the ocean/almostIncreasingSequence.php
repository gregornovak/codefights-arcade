<?php

/**
 * Given a sequence of integers as an array, determine whether it is possible to obtain a strictly increasing sequence by removing no more than one element from the array.
 * 
 * For sequence = [1, 3, 2, 1], the output should be almostIncreasingSequence(sequence) = false; 
 * There is no one element in this array that can be removed in order to get a strictly increasing sequence.
 * 
 * For sequence = [1, 3, 2], the output should be almostIncreasingSequence(sequence) = true. 
 * You can remove 3 from the array to get the strictly increasing sequence [1, 2]. 
 * Alternately, you can remove 2 to get the strictly increasing sequence [1, 3].
 */
function almostIncreasingSequence($sequence) {
    $count = 0;
    $length = count($sequence);
    for($i = 0; $i < $length; $i++) {
        if($sequence[$i] <= $sequence[$i - 1] && $sequence[$i - 1] !== NULL) {
            $count++;
            if($sequence[$i] <= $sequence[$i - 2] && 
                $sequence[$i + 1] <= $sequence[$i - 1] && 
                $sequence[$i + 1] !== NULL &&
                $sequence[$i - 1] !== NULL &&
                $sequence[$i - 2] !== NULL) {
                
                return false;
            }
        }
    }
    return $count <= 1;
}

$arr = [3, 5, 67, 98, 3];
var_dump(almostIncreasingSequence($arr));