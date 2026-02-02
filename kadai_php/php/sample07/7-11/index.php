<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name='Ruby入門';
    $price =  1800;
    //new mysqli(ホスト名、ユーザー名、パスワード、データベース名、ポート番号)
    $mysql = new mysqli('localhost','root','root','mydb',8889);
    if($mysql->connect_errno){
        //処理を終了させる
        die($mysql -> connect_error);
    }
        //
    $stm =$mysql->prepare('INSERT INTO items SET name=?,price=?') or die($mysql ->error);
    $stm->bind_param('si',$name,$price);
    $stm->execute() or die($stm->error);
    echo 'データを挿入しました';
    ?>
    </body>
</html>