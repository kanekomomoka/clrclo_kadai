<?php
// 合計を計算する
function sum($param1, ...$numbers) {
    $answer = 0;
    foreach ($numbers as $num) {
        $answer += $num;
    }

    return $answer;
}

$item_sum = sum('param1', 10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
echo $item_sum;