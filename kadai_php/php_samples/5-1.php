<?php
// date_default_timezone_set('Asia/Tokyo');
// $today = time();
// $format_date = date('Y/m/d', $today);
// echo $format_date;

$today = new DateTime(); // DateTimeのオブジェクトを作る
$today->setTimeZone(new DateTimeZone('Asia/Tokyo'));
echo $today->format('Y/m/d');
