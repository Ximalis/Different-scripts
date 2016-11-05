<?php

interface ICard {
    function OutColor();
    function OutDamage();
    function OutHealth();
    function OutAttribute();
}

$x = 3 + "15%" + "$25";
echo $x;
echo "<br>";

$a = 1;
$b = 2;

echo $a++.", ".$b--;
echo "<br>";

$a = "1";
echo $a;
echo "<br>";
$a[$a] = "2";
echo $a;
echo "<br>";

$i = 5;
$i+= $i++ + ++$i;
echo $i;
echo "<br>";

$a = 1;
echo ++$a + $a++; // may print 4
unset($i);


$arr = [];
$i;
for ($i=1; $i<5; $i++) {
    $asd=0;
    $arr[$i]=
    function (){
        echo $i;
        echo $asd;
    };
}

foreach ($arr  as $f ){
    $f();
}

$n = 123456;
$fst = (string) $n;
$str2 = '';
for ($i=strlen($fst)-1; $i>=0; $i--){
    $str2 .= $fst[$i];
    echo $str2;
}
echo "<br>";
echo $str2;

$f=5;

