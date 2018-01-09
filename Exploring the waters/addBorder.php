<?php

/**
 * Given a rectangular matrix of characters, add a border of asterisks(*) to it.
 * For: picture = ["abc",
 *                 "ded"]
 * The output should be:
 * addBorder(picture) = ["*****",
 *                      "*abc*",
 *                      "*ded*",
 *                      "*****"]
 */
function addBorder($picture) {

    $width = strlen($picture[0]) + 2;    
    $count = count($picture);

    for($i = 0; $i < $count; $i++) {
        $picture[$i] = '*' . $picture[$i] . '*';
    }

    array_unshift($picture, str_repeat('*', $width));
    $picture[] = str_repeat('*', $width);
    
    return $picture;
}

$picture = ["abc",
            "ded"];
var_dump(addBorder($picture));