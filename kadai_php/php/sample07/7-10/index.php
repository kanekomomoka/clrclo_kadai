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

    //結果セット
    $results = $mysql->query('SELECT * FROM item')or die($mysql->error);
    //  正しい間違いを発見するために
    // if(!$results){
    //     die($mysql->error);
    // }

    while($row = $results->fetch_assoc()){
    echo htmlspecialchars($row['name'],ENT_QUOTES | ENT_HTML5),'/',$row['price'],'円','<br>';
    }

    // $row = $results->fetch_assoc();
    // echo $row['name'],'<br>';

    // $row = $results->fetch_assoc();
    // echo $row['name'];
    ?>
</body>
</html>