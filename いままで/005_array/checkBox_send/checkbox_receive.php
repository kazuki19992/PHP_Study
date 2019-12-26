<?php
//チェックボックスの値を取得する
$colors = $_POST['colors'];
?>

<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <h1>受信ページ</h1>
    <h3>好きな色</h3>
    <ul>
    <?php foreach($colors as $var){ ?>
        <li><?php echo htmlspecialchars($var,ENT_QUOTES,'UTF-8');?></li> 
        <!--
            特殊文字をhtmlspecialcharsで変換する.JSを無効化する
        -->
    <?php } ?>
    </ul>

    <p>あなたの好きな色は<?php echo implode('と',$colors);?>です。</p>
</body>
</html>