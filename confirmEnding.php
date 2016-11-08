<?php

function confirmEnding($str, $target){
    $last = $str{strlen($str)-1};
    if ($last == $target){
        echo "Confirm";
    } else {
        echo 'Not confirm';
    }

}

confirmEnding("Bastian", "n");