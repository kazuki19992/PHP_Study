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
    <h1>受信ページ</h1>
    <p>お前<?php echo $user_name; ?>か?(免許証を見ながら)</p>
    <p>趣味は<?php echo $hobby; ?>か?</p>
    <!-- この下にフォームを追加していく -->
    <form action="./send_complete.php" method="POST">
        <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
        <input type="hidden" name="hobby" value="<?php echo $hobby; ?>">
        
        <input type="submit" value="登録"> <!--送信ボタン-->

    </form>
</body>
</html>