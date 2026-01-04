<?php
try {
    $file = new SplFileObject('notfound/log.txt', 'w');    
} catch (Exception $exception) {
    die('ファイルを作成できませんでした');
}

$file->fwrite('ログです');