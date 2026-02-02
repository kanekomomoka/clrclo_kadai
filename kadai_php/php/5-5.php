<?php
class Item{ //クラス名は最初大文字
    //商品の名前
    public string $name;//商品名
    private int $price;//価格


    //コンストラクター、設定忘れを防ぐ
    public function __construct(string $name,int $price = 0)
    { 
        $this->name = $name;
        $this->price = $price;
    }

    //価格を設定する
    public function setPrice(int $price){
        if($price < 0){
            return false;
        }
        $this->price = $price;
        return true;
    }


    public function getPrice(string $end = ''){
        return number_format($this->price).$end;
    }

}

//PHP入門
$php_basic = new Item( 'PHP入門',2300);
$php_basic ->setPrice(1500);

echo $php_basic->name,'/',$php_basic ->getPrice('円'),"\n";

//JS入門
$js_basic = new Item('js入門',2000);
echo $js_basic->name,'/',$js_basic ->getPrice('ドル');