<?php
// 
function largestOfFour($arr) {
    $max=0;
    foreach($arr as $arr1){
        foreach($arr1 as $v){
            if($max<$v) {
                $max = $v;
            }
        }
    }
    return $max;
}

echo 'Largest number is ' . largestOfFour([[4, 5, 1, 3], [13, 27, 18, 26], [32, 35, 37, 39], [1000, 1001, 857, 1]]);