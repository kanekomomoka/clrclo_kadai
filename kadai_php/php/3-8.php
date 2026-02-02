<?php
$pref = [
    'hokkaido '=> '北海道',
    'aomori '=> '青森県',   
    'iwate '=> '岩手県'
];

foreach ($pref as $pref_key => $pref_name) {
    echo $pref_name . ":" . $pref_key . "\n";
}

// $color = ['赤','青','黄'];
// foreach($color as $color_name){
//     echo $color_name;
// }