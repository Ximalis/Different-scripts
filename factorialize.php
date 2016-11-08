<?php

function factorialize($num){
    $res = 1;
        for ($i=1; $i<=$num; $i++){
            $res *= $i;
        }
    return  $res;

}
$num = 3;
echo 'Factorial ' . $num . ' = ' . factorialize($num);