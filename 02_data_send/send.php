<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>送信フォーム</h1>
        <p>次のページへデータを渡します！</p>
        <!-- この下からフォームを追加していく -->
        <form action="./confirm.php" method="POST">
            <label>おなまえ：</label>
            <input type="text" name="user_name">
            <label>齢：</label>
            <input type="text" name="old">

            <input type="submit" value="確認する！">
    </body>
</html>