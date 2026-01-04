<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mysql = new mysqli('localhost', 'root', 'root', 'mydb', 8889);
    if ($mysql->connect_errno) {
        die($mysql->connect_error);
    }

    $results = $mysql->query('SELECT * FROM items') or die($mysql->error);
    // if (!$results) {
    //     die($mysql->error);
    // }

    while ($row = $results->fetch_assoc()) {
        echo htmlspecialchars($row['name'], ENT_QUOTES | ENT_HTML5),
            ' / ', number_format($row['price']), '<br>';
    }
?>
</body>
</html>