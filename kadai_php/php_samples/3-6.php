<?php
$color = ['黒', '白', '赤'];
// $max = count($color);

//array_push($color, '緑', '黄');
// $color[] = '緑';
// $color[] = '黄';

// $mycolor = array_pop($color);
// echo $mycolor;
// $mycolor = array_pop($color);
// echo $mycolor;

$color_string = implode(',', $color);
$color_string .= ',緑,黄'; // 黒,白,赤,緑,黄
$newarray = explode(',', $color_string);

print($color_string);
print_r($newarray);
