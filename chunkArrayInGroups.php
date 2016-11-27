<?php

/**
 * Function splits an array (first argument) into groups the length of size (second argument).
 * Return two-dimensional array.
 */

function chunkArrayInGroups($arr, $num){
    //print_r(array_chunk($arr, $size));
    $cnt = count($arr) / $num;
    $r = array();
    $idx = 0;

    for ($i = 0; $i < $cnt; $i++)
    {
        $count = 0;
        for ($j = $idx; $j < count($arr); $j++)
        {
            $r[$i][$count] = $arr[$j];
            $idx = $j;
            $count++;
            if ($count == $num) break;
        }
        $idx++;
    }
    return $r;
}

$chunk = chunkArrayInGroups(["a", "b", "c", "d"], 2);
print_r($chunk);