<?php
class Item {
    public string $name; // 商品名
    public int $price; // 価格
}

// PHP入門
$php_basic = new Item();
$php_basic->name = 'PHP入門';
$php_basic->price = 1500;

echo $php_basic->name, '/', $php_basic->price;

// JS入門
$js_basic = new Item();
$js_basic->name = 'JS入門';
$js_basic->price = 2300;
