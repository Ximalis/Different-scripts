<?php
function repeatStringNumTimes($str, $times){
    if ($times < 0){
        echo "<br>";
    } else {
        for ($i=0; $i<$times; $i++){
            echo $str . "<br>";
        }
    }
}
repeatStringNumTimes("abc", 3);