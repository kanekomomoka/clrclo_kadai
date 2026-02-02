<?php
class Item{ //クラス名は最初大文字
    //商品の名前
    public string $name;//商品名
    public int $price;//価格


    //コンストラクター
    public function __construct(string $name,int $price = 0)
    { 
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(string $end = ''){
        return number_format($this->price).$end;
    }

}

//PHP入門
$php_basic = new Item( 'PHP入門');

echo $php_basic->name,'/',$php_basic ->getPrice('円'),"\n";

//JS入門
$js_basic = new Item('js入門',2000);
echo $js_basic->name,'/',$js_basic ->getPrice('ドル');