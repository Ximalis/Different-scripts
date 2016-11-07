<?php

function findLongestWord($str)
{
    $str = explode(" ", $str);
    $res = '';
    foreach($str as $v) {
        if(strlen($res) < strlen($v))
            $res = $v;

    }
    echo 'Length of the longest word is ' .  strlen($res) . ' symbols';
}

findLongestWord("The quick brown fox jumped over the lazy dog");
