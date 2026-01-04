<?php
// $pref['hokkaido'] = '北海道';
// $pref['aomori'] = '青森県';
// $pref['iwate'] = '岩手県';

// $pref = [
//     'hokkaido' => '北海道',
//     'aomori' => '青森県',
//     'iwate' => '岩手県'
// ];

$pref['hokkaido'] = [
    '赤平市',
    '旭川市',
    '芦別市'
];
$pref['aomori'] = [
    '青森市',
    '鰺ヶ沢町'
];

// >= 以上
// => 連想配列の代入

// $mypref = 'aomori';
// echo $pref[$mypref];

echo $pref['aomori'][1];