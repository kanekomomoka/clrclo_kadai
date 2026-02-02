<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //new mysqli(ホスト名、ユーザー名、パスワード、データベース名、ポート番号)
    $mysql = new mysqli('localhost','root','root','mydb',8889);
    if($mysql->connect_errno){
        //処理を終了させる
        die($mysql -> connect_error);
    }
    ?>
</body>
</html>