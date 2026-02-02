<?php
//合計を計算する
function sum(...$numbers){
    $answer = 0;
    foreach ($numbers as $num){
        $answer += $num;
    }

    return $answer;
}

$item_sum = sum(5050,50,);
echo $item_sum;
