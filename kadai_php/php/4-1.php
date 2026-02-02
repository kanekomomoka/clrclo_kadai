<?php

// $number = trim(fgets(STDIN));

//連想配列を受け取って、リストにして出力する
function make_list($list){
    foreach($list as $key => $value){
        echo '‐' . $key . ':' . $value . "\n";
    }
}

$pref =[
    'hokkaido' => '北海道',
    'aomori' => '青森県',
    'iwate' => '岩手県',
];


make_list($pref);

$color = [
    'red' => '赤',
    'blue' => '青',
    'green' => '緑'
];
// foreach($color as $color_code => $color_name){
//     echo '・' . $color_code . ':' . $color_name . "\n";
// }

make_list($color);