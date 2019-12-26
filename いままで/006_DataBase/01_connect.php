<?php

$dsn = 'mysql:dbname=sample;host=localhost;charset=utf8';      // DBの情報を設定
// mysqlを使用し、dbname(DB名)はsample, host(ドメイン名)はlocalhost

$user = 'root';                                                 // ユーザー名(本番ではrootは使わない)
$password = '';                                                 // パスワードは未設定のため空


try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '接続に成功しています';

}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}