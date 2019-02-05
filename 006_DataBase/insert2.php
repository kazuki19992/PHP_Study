<?php

$dsn = 'mysql:dbname=sample;host=localhost;charset=utf8'; //データベース情報の設定
$user = 'root'; //ユーザー名をrootに設定(本番環境では使用しない)
$password = '';
$name = '太田美香';
$age = 32;

try {

    $dbh = new PDO($dsn, $user, $password); //データベースに接続 newでクラスのインスタンス化
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //エラーをどこまで報告するか
    $sql = "INSERT INTO user (name, age) VALUES (:name, :age)"; //置き換える部分をコロン+名前で指定する
    $stmt = $dbh->prepare($sql); //プリペアドステートメント
    $stmt->bindValue(':name', $name, PDO::PARAM_STR); //SQLに変数の値を当てはめる
    $stmt->bindValue(':age', $age, PDO::PARAM_INT);
    $stmt->execute();
    echo '接続に成功しました';

} catch (PDOException $e) {
    print($e->getMessage());
    die();
}