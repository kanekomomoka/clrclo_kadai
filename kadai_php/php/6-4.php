<?php
$items = simplexml_load_file('data/items.xml');

foreach($items as $item){
    echo $item->name,'/',number_format((float)$item->price),"\n";
}

//書き込む
$add_el = $items->addChild('item');
$add_el->addChild('name','Go入門');
$add_el->addChild('price','5000');

$items->asXML('data/items.xml');