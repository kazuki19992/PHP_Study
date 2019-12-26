<?php
// チェックボックスの値を取得する
$colors = $_POST['colors'];
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>受信ページ</h1>
        <h3>好きな色</h3>
        <ul>
            <?php foreach($colors as $row){ ?>
            <li><?php echo htmlspecialchars($row, ENT_QUOTES, 'utf-8'); ?></li>
            <?php } ?>
        </ul>
    </body>
</html>