<?php

$dsn = 'mysql:dbname=sample;host=localhost;charset=utf8'; //データベース情報の設定
$user = 'root'; //ユーザー名をrootに設定(本番環境では使用しない)
$password = '';

try {

    $dbh = new PDO($dsn, $user, $password); //データベースに接続 newでクラスのインスタンス化
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (id, name, age, email) VALUES (NULL, '田中三郎', '28', 'sample5@sample5.com')";//SQL文を格納
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    echo '接続に成功しました';

} catch (PDOException $e) {
    print($e->getMessage());
    die();
}