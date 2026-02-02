<?php
$file = new SplFileObject('data/log.txt','w');
$today = new DateTime();
$today->setTimeZone(new DateTimezone('Asia/TOkyo'));
$file->fwrite($today->format('Y-m-d H:i:s')."\n");