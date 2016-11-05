<?php

function factorialize($num){
    $num2 = 1;
        for ($i=1; $i<=$num; $i++){
            $num2 *= $i;
        }
    echo $num2;

}

factorialize(3);