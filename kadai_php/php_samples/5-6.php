<?php
class Item {
    public string $name; // 商品名
    private int $price; // 価格

    // コンストラクター
    public function __construct(string $name, int $price = 0) {
        $this->name = $name;
        $this->price = $price;
    }

    // 価格を設定する
    public function setPrice(int $price) {
        if ($price < 0) {
            return false;
        }

        $this->price = $price;
        return true;
    }

    // 価格を取得する
    public function getPrice(string $end = '') {
        return number_format($this->price) . $end;
    }
}

class Book extends Item {
    public int $page; // 書籍のページ数
}

class Food extends Item {
    ...
}

class Stationery extends Item {
    ...
}

// PHP入門
$php_basic = new Book('PHP入門', 2300);
$php_basic->page = 100;
$php_basic->setPrice(1500);

echo $php_basic->name, '(', $php_basic->page, 'ページ)/', $php_basic->getPrice('円');

// JS入門
$js_basic = new Item('JS入門', 2300);
