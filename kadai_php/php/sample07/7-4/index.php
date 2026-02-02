<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $sum = 1+10; ?>
    <?php if($sum >10): ?>
        <?php echo '10よりも大きいです'; ?>
    <?php else:?>
        <?php echo '10よりも小さいです';?>
    <?php endif; ?>

    <?php for($i=0; $I<10; $i++):?>
        <p><?php echo $i;?></p>
    <?php endfor; ?>
</body>
</html>