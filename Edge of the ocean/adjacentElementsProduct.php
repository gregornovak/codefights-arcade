<?php

/**
 * Given an array of integers, find the pair of adjacent elements that has the largest product and return that product.
 * 
 * Example:
 * For inputArray = [3, 6, -2, -5, 7, 3], the output should be adjacentElementsProduct(inputArray) = 21. 7 and 3 produce the largest product.
 */
function adjacentElementsProduct($inputArray) {
    $product = $inputArray[0] * $inputArray[1];
    $count = count($inputArray) - 1; // -1 is used because i already increment the second value in the loop.

    for($i = 0; $i < $count; $i++) {
        $tempProduct = $inputArray[$i] * $inputArray[$i + 1];

        if($tempProduct > $product) {
            $product = $tempProduct;
        }
    }

    return $product;
}

// $arr = [3, 6, -2, -5, 7, 3]; // 21
$arr = [-23, 4, -3, 8, -12]; // -12
echo adjacentElementsProduct($arr);
    