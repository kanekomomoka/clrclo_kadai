<?php
$tax = 10; // 消費税

// 足し算の結果を返す。消費税を加える
function sum($a, $b) {
    global $tax;
    $ret = ($a + $b) * ($tax / 100 + 1);
    
    return $ret;
}

$num1 = 100;
$num2 = 200;

$answer = sum($num1, $num2);
echo $answer;