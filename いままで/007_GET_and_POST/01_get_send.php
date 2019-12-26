<!-- 送信ページ -->
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>GET送信</h1>
        <p>名前を入力してください</p>

        <form action="02_get_receive.php" method="GET">
            <label>名前</label>
            <input type="text" name="name">
            <label>趣味</label>
            <input type="text" name="hobby">
            <input type="submit" value="送信する">
        </form>
    </body>
</html>
