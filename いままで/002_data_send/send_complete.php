<?php
    //postされたデータを取得する
    $user_name = $_POST['user_name']; //入力フォームの値を$user_nameに格納
    $hobby = $_POST['hobby']
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>登録ページ</h1>
    <p><?php echo $user_name; ?>、おまんこぉ＾～(気さくな挨拶)</p>
    <p><?php echo $hobby; ?>？いい趣味してんねぇ！？</p>
    <p>登録したで</p>
    <!-- この下にフォームを追加していく -->
</body>
</html>