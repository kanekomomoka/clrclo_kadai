<?php
$tax = 10;

//足し算の結果を返す、消費税を加える
function sum($a,$b){
    global $num1,$num2,$tax;
    // $ret = $num1 +$num2;
    $ret = ($a + $b) *($tax / 100 + 1);
    return $ret;
}

$num1 = 100;
$num2 = 200;

$answer =sum($num1,$num2);
echo $ret;