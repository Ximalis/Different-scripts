<?php

/**
 * Function Check if a string (first argument, str) ends with the given target string (second argument, target).
 * Return true if ends and false if not.
 */

function confirmEnding($str, $target){
    $last = $str{strlen($str)-1};
    if ($last == $target){
        return true;
    } else {
        return false;
    }
}
$res = confirmEnding("Bastian", "n");
if ($res == true){
    echo "Confirm";
} else {
    echo "Not confirm";
}