<?php
class Item {
    public static int $tax = 10; // 消費税

    public static function getTax(): int {
        return self::$tax;
    }
}

// $item = new Item();
// echo $item->getTax();

// echo Item::getTax();

echo Item::$tax, "\n";
Item::$tax = 8;

$item02 = new Item();
echo $item02->getTax();