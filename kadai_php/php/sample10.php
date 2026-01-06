<?php
//キーボードからの入力を受け取ろう
echo "数字を入力してください：";
// $number = fgets(STDIN);
// $number = trim($number);
// ↓　もっといい書き方にする

$number = trim(fgets(STDIN));
echo $number,"ですね？";