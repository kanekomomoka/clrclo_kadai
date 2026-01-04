<?php
// 足し算をするファンクション
function sum($num1, $num2) {
    $answer = $num1 + $num2;



    return $answer;
    echo '画面に表示しました';

}

$item_sum = sum(167, 269);
echo $item_sum;