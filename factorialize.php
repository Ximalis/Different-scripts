<?php

function factorialize($num){
    $num2 = 1;
        for ($i=1; $i<=$num; $i++){
            $num2 *= $i;
        }
    return 'Factorial ' . $num . '=' . $num2;

}

echo factorialize(3);