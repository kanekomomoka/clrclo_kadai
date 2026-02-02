<?php
$color = ['黒','白','赤',];//0,1,2
// $max = count($color);//3

// echo $color[$max -1];//赤

// array_push($color,'青','黄');//配列の末尾に要素を追加する

// $mycolor= array_shift($color);//配列の先頭の要素を取り出す
// echo $mycolor;//黒

$color_string = implode(',',$color);//配列を文字列に変換する
$color_string .= ',緑,黄';
$newarray = explode(',',$color_string);//文字列を配列に変換する 

print($color_string);
print_r($newarray);