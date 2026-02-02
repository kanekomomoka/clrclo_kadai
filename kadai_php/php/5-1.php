<?php
// date_default_timezone_set('Asia/Tokyo');
// $today = time();
// $format_data = date('Y/m/d',$today);

// echo $format_data ;

$today = new DateTime();//dateTimeオブジェクトを作る
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
echo $today->format('Y/m/d');