<?php

function largestOfFour($arr) {
    $max=[0][0];
    foreach($arr as $arr1){
        foreach($arr1 as $v){
            if($max<$v) {
                $max = $v;
            }
        }
    }
    echo 'Largest number is ' . $max;
}

largestOfFour([[4, 5, 1, 3], [13, 27, 18, 26], [32, 35, 37, 39], [1000, 1001, 857, 1]]);