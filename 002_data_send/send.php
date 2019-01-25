<!--
    やること
    ・名前と趣味を入力していく.
    ・確認ページ(send_confirm.php)にデータを渡し、表示する
    ・確認ページから登録ボタンだけで完了ページ(send_complete.php)にデータを渡す.
-->

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>練習フォーム</h1>
    <p>次のページへデータを渡すゾ。</p>
    <!-- この下にフォームを追加していく -->
    <form action="./send_confirm.php" method="POST">
        <label>名前だよ。あくしろよ</label><br>
        <input type="text" name="user_name"><br><br> <!--受信時の名前をつける -->

        <label>お前の趣味は何だァ！？盆栽かァ！？</label><br>
        <input type="text" name="hobby"><br><br>

        <input type="submit" value="おくりびと"> <!--送信ボタン-->

    </form>
</body>
</html>