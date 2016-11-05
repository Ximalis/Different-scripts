<?php
$str = 'qweewqw';
$str = preg_replace("|[^\d\w ]+|i","",$str);
$str = preg_replace("|[\s]+|i"," ",$str);

function pal($str) {
    $str2 = '';
    for ($i=strlen($str)-1; $i>=0; $i--){
        $str2 .= $str[$i];
    }
    if ($str2 == $str){
        echo "<h1> Word is palindrome </h1>";
    } else {
        echo "<h1> Not palindrome </h1>";
    }
}

pal($str);

// Что-то похожее на ООП :)
class Pal {
    function __construct($str) {
        $str2 = '';
        for ($i=strlen($str)-1; $i>=0; $i--){
            $str2 .= $str[$i];
        }
        if ($str2 == $str){
            echo "<h1> Word is palindrome </h1>";
        } else {
            echo "<h1> Not palindrome </h1>";
        }
    }
}

$palindrome = new Pal($str);