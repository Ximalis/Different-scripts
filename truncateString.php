<?php

/**
 * Function Truncate a string (first argument) if it is longer than the given maximum string length (second argument).
 * Return the truncated string with a ... ending.
 */

function truncateString($str, $str_length){
    if (mb_strlen($str) <= 3){
        return $str;
    } else {
        $str2 ='';
        for ($i=0; $i<=$str_length; $i++){
            $str2 .= $str[$i];
        }
        return $str2  . '...';
    }
}

echo truncateString("A-tisket a-tasket A green and yellow basket", 11);