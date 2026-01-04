<?php
// function sum(int $a, int $b): int {
//     return $a + $b;
// }

// 数字を成型して表示する
function echo_price($callback) {
    echo number_format($callback(1000, 500)), '円';
}

// クロージャー・無名関数
// $get_sum = function ($a, $b) {
//     return $a + $b;
// };

$get_sum = fn($a, $b) => $a + $b;

$sum = $get_sum(10, 35);
echo $sum;
// echo_price(function ($a, $b) {
//     return $a + $b;
// });