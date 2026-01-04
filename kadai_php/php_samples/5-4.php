<?php
class Item {
    public string $name; // 商品名
    public int $price; // 価格

    // コンストラクター
    public function __construct(string $name, int $price = 0) {
        $this->name = $name;
        $this->price = $price;
    }

    // 価格を取得する
    public function getPrice(string $end = '') {
        return number_format($this->price) . $end;
    }
}

// PHP入門
$php_basic = new Item('PHP入門');

echo $php_basic->name, '/', $php_basic->getPrice('円');

// JS入門
$js_basic = new Item('JS入門', 2300);
