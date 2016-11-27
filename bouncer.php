<?php
/**
 * Function remove all falsy values from an array.
 * Specifically: false, null, 0, "", undefined, and NaN.
 */

function bouncer ($arr){
    $cnt = count($arr);
    for($i=0; $i<$cnt; $i++){
        if (empty($arr[$i]) || is_nan($arr[$i])){
            unset($arr[$i]);
        }
    }
    return $arr;
}

$null;        // null variable
$nan = NAN;   // NaN variable
$func_bouncer = bouncer([7, "ate", "", false, 9, $undefined, $nan, 0, $null, false, 0, 125, null, 12.36]);
var_dump($func_bouncer);
