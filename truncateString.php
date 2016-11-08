<?php
function truncateString($str, $str_length){
    if (mb_strlen($str) <= 3){
        echo $str;
    } else {
        $str2 ='';
        for ($i=0; $i<=$str_length; $i++){
            $str2 .= $str[$i];
        }
        echo $str2  . '...';
    }
}

truncateString("A-tisket a-tasket A green and yellow basket", 11);