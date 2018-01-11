<?php

/**
 * You are given an array of integers representing coordinates of obstacles situated on a straight line.
 * Assume that you are jumping from the point with coordinate 0 to the right. 
 * You are allowed only to make jumps of the same length represented by some integer.
 * Find the minimal length of the jump enough to avoid all the obstacles.
 * 
 * Example: 
 * For inputArray = [5, 3, 6, 7, 9], the output should be avoidObstacles(inputArray) = 4.
 * Check out the image below for better understanding:
 * https://codefightsuserpics.s3.amazonaws.com/tasks/avoidObstacles/img/example.png?_tm=1490625560816
 */
function avoidObstacles($inputArray) {
    sort($inputArray);
    $lastItem = end($inputArray);
    $step = 0;
    for($i = 1; $i < $lastItem; $i++) {
        if(in_array($i, $inputArray)) {
            continue;
        } else {
            $currentStep = 0;
            $clean = true;
            while($currentStep <= $lastItem) {
                $currentStep += $i;
                if(in_array($currentStep, $inputArray)) {
                    $clean = false;
                    break;
                }
                if($clean) {
                    $step = $i;
                }
            }

            if($clean) {
                break;
            } else {
                $step = $lastItem + 1;
            }
        }
    }
    return $step;
}

$arr = [5, 3, 6, 7, 9]; // 4
// $arr = [1, 4, 10, 6, 2]; // 7
// $arr = [2, 3]; // 4
var_dump(avoidObstacles($arr));
    