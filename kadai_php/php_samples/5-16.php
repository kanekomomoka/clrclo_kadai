<?php
class Item {
    public string $name;
}

$item01 = new Item();
$item01->name = 'PHP入門';

$item02 = clone($item01); // $item01のクローンを作る

$item01->name = 'JS入門';
echo '$item01 = ', $item01->name, "\n";
echo '$item02 = ', $item02->name;