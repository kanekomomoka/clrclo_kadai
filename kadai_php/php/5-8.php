<?php
class Item{
    protected int $unit;//個数

    public function __construct($unit){
        $this->unit = $unit;
    }

    public function getUnit():string{
        return $this->unit.'個';
    }
}

//オーバーライド
class Book extends Item{
    private int $page;//ページ数

    public function __construct(int $unit,int $page)
    {
        parent::__construct($unit);
        $this->page = $page;
    }
    public function getUnit():string{
        return $this-> unit .'冊';
    }
}


$eraser = new Item(10);
echo $eraser->getUnit(),"\n";

$Book = new Book(5,120);
echo $Book->getUnit();