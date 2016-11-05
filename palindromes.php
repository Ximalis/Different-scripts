<?php
$str = 'qweewq';
$str2 = '';
for ($i=strlen($str)-1; $i>=0; $i--){
    $str2 .= $str[$i];
}
if ($str2 == $str){
    echo "<h1> Word is palindrome </h1>";
} else {
    echo "Not palindrome";
}