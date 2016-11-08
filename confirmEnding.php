<?php

function confirmEnding($str, $target){
    $last = $str{strlen($str)-1};
    if ($last == $target){
        return "Confirm";
    } else {
        return 'Not confirm';
    }

}

echo confirmEnding("Bastian", "n");