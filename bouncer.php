<?php
/**
 * Function remove all falsy values from an array.
 * Specifically: false, null, 0, "", undefined, and NaN.
 *
 * $arr[$i] === false or $arr[$i] === "" or $arr[$i] == is_null($arr[$i]) or $arr[$i] === undefined or $arr[$i] == is_nan($arr[$i]) or $arr[$i] === 0
 */

error_reporting(0);
function bouncer ($arr){

    for($i=0; $i<count($arr); $i++){
        if (empty($arr[$i]) or is_null($arr[$i]) or is_nan($arr[$i])){
            unset($arr[$i]);
            $arr[$i] = 'delete';
        }
    }

    for($i=0; $i<count($arr); $i++){
        if ($arr[$i] == 'delete'){
            unset($arr[$i]);
        }
    }
    return $arr;
}

$null;        // null variable
$nan = NAN;   // NaN variable
$func_bouncer = bouncer([7, "ate", "", false, 9, $undefined, $nan, 0, $null, false, 0, 125, null, 12.36]);
print_r($func_bouncer);
echo "<br><br><br><br>";
var_dump($func_bouncer);
