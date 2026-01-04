<?php
$file = new SplFileObject('data/log.txt', 'a');
$today = new DateTime();
$today->setTimeZone(new DateTimeZone('Asia/Tokyo'));
$file->fwrite($today->format('Y-m-d H:i:s') . "\n");