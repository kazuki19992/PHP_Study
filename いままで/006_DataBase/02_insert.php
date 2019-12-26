<?php

$dsn = 'mysql:dbname=sample;host=localhost;charset=utf8';      // DBの情報を設定
// mysqlを使用し、dbname(DB名)はsample, host(ドメイン名)はlocalhost

$user = 'root';                                                 // ユーザー名(本番ではrootは使わない)
$password = '';                                                 // パスワードは未設定のため空


try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // SQL文を格納する
    $sql = "INSERT INTO user (id, name, age, email) VALUES (NULL, '情研之助', '56', 'sample5@sample.com')";
    // SQLを実行する
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    echo '接続に成功しています';

}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}