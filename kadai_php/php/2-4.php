<?php 
$number = 'あいうえお';

// $numeric = is_numeric($number);

if(is_numeric($number) ){ //tureを省略している
    echo "{$number}は数字です";
}else{
    echo "{$number}は数字ではありません";
}
