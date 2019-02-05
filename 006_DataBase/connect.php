<?php

$dsn = 'mysql:dbname=sample;host=localhost;charset=utf8'; //データベース情報の設定
$user = 'root'; //ユーザー名をrootに設定(本番環境では使用しない)
$password = '';

try{

    $dbh = new PDO($dsn, $user, $password); //データベースに接続 newでクラスのインスタンス化
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*$sql = "";
    $stmt = $dbh->prepare($sql);    //エラーが出るっぽい
    $stmt->execute();*/
    echo '接続に成功しました';

}catch (PDOException $e){
    print($e->getMessage());
    die();
}