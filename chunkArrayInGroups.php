<?php

function chunkArrayInGroups($arr, $size){

    print_r(array_chunk($arr, $size)); // стандартная ф-я, свою ещё не сделал.

}

chunkArrayInGroups(["a", "b", "c", "d"], 2);