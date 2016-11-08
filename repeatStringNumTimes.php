<?php
function repeatStringNumTimes($str, $times){
    if ($times < 0){
        return '<br>';
    } else {
        $num='';
        for ($i=0; $i<$times; $i++){
            $num .= $str. "<br>";
        }
        return $num;
    }
}
echo repeatStringNumTimes("abc", 3);