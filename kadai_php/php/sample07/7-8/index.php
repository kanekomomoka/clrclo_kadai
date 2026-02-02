<?php
//今からセッションを使いますよ
session_start();
//再読み込みするたびにセッションの値が変わる
session_regenerate_id();
$account ='kaneko';
$_SESSION['account'] = $account;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ようこそ、<?php echo htmlspecialchars($account,ENT_QUOTES | ENT_HTML5); ?></p>
    <p><a href="page02.php">次のページへ</a></p>
</body>
</html>