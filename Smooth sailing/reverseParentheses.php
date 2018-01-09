<?php

/**
 * You have a string s that consists of English letters, punctuation marks, whitespace characters, and brackets. 
 * It is guaranteed that the parentheses in s form a regular bracket sequence.
 * Your task is to reverse the strings contained in each pair of matching parentheses, starting from the innermost pair. 
 * The results string should not contain any parentheses.
 * 
 * 
 * For string s = "a(bc)de", the output should be reverseParentheses(s) = "acbde".
 * For string s = "The ((quick (brown) (fox) jumps over the lazy) dog)", the output should be reverseParentheses(s) = "The god quick nworb xof jumps over the lazy".
 */

function reverseParentheses($s) {
    preg_match_all('/\(/', $s, $matches, PREG_OFFSET_CAPTURE); // PREG_OFFSET_CAPTURE returns the offset (index) where the match is located in the string.
    
    // Loop from the last item, so that we get most inside parentheses
    for($i = count($matches[0]) - 1; $i >= 0; $i--) {
        // Position of the first parenthesis ( - matches[0][$i][1]
        // Position of the last parenthesis ) - $lastOccurance
        $lastOccurance = strpos($s, ')', $matches[0][$i][1]);
        $reversed = '';
        // Reverse the string
        for($j = $lastOccurance - 1; $j > $matches[0][$i][1]; $j--) {
            $reversed .= $s[$j];
        }
        // Replace reversed string with the previous string and parenthesis
        $s = substr_replace($s, $reversed, $matches[0][$i][1], $lastOccurance - $matches[0][$i][1] + 1);
    }

    return $s;
}

echo reverseParentheses('The ((quick (brown) (fox) jumps over the lazy) dog)');