<?php
// POSTされたデータを取得する
$name = $_POST['user_name'];
$old = $_POST['old'];
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>登録ありがとうございます！！</h1>
        <!-- HTML内にechoプログラムを埋め込もう！ -->
        <p>こんにちは<?php echo $name; ?>さん！</p>
        <p>年齢は<?php echo $old; ?>歳ですね！</p>
        <p>登録完了致しましたので、至急40万円お振り込みください。</p>
    </body>
</html>