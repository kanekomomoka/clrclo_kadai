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

class Book extends Item{
    public function getUnit():string{
        return $this-> unit .'冊';
    }
}


$eraser = new Item(10);
echo $eraser->getUnit(),"\n";

$Book = new Book(5);
echo $Book->getUnit();