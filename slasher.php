<?php

/**
 * Function return the remaining elements of an array after chopping off n elements from the head.
 * Chop array beginning of the zeroth index.
 */

function slasher ($arr, $num){
    $res=array();
    for ($i=$num; $i<count($arr); $i++){
        $res[] = $arr[$i];
    }
    return $res;
}

$func_slash = slasher([1, 2, 3, 4, 5, 6, 7], 3);
print_r($func_slash);