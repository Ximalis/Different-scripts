<?php

/**
 * Function return the length of the longest word in the provided sentence.
 */

function findLongestWord($str)
{
    $str = explode(" ", $str);
    $res = '';
    foreach($str as $v) {
        if(strlen($res) < strlen($v))
            $res = $v;

    }
    return strlen($res);
}

echo 'Length of the longest word is ' . findLongestWord("The quick brown fox jumped over the lazy dog") . ' symbols';
