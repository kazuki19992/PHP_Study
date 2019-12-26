<?php
// POSTされたデータを受信する
$user_name = $_POST['user_name'];
$old = $_POST['old'];
?>

<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>確認ページ</h1>
        <p>あなたの名前は<?php echo $user_name; ?>さんです。</p>
        <p>年齢は<?php echo $old; ?>歳です。</p>
        <p>こちらの情報でよろしいですか?</p>
        <form action="complete.php" method="POST">
            <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">
            <input type="hidden" name="old" value="<?php echo $old; ?>">
            <input type="submit" value="登録">
        </form>
    </body>
</html>