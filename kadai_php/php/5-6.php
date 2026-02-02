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

class Book extends Item{
    public int $page;
}

//PHP入門
$php_basic = new Book( 'PHP入門',2300);
$php_basic ->setPrice(1500);
$php_basic ->page = 50;

echo $php_basic->name,'(',$php_basic->page,'P)',$php_basic ->getPrice('円'),"\n";

//JS入門
$js_basic = new Book('js入門',2000);
$js_basic ->setPrice(300);
$js_basic ->page = 100;
echo $js_basic->name,'(',$js_basic->page,'P)',$js_basic ->getPrice('ドル');