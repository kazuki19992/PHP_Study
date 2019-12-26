<?php

$dsn = 'mysql:dbname=sample;host=localhost;charset=utf8';      // DBの情報を設定
// mysqlを使用し、dbname(DB名)はsample, host(ドメイン名)はlocalhost

$user = 'root';                                                 // ユーザー名(本番ではrootは使わない)
$password = '';                                                 // パスワードは未設定のため空

// 挿入するデータ
$name = '情研三郎';
$age = 6;

try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // SQL文を格納する(置き換える部分をコロン+名前で指定)
    $sql = "INSERT INTO user (name, age) VALUES (:name, :age)";

    $stmt = $dbh->prepare($sql);

    // SQLに変数を当てはめる
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':age', $age, PDO::PARAM_INT);

    // 実行
    $stmt->execute();
    echo '処理が完了しました';

}catch (PDOException $e){   // 例外を検知する
    print('Connection failed:'.$e->getMessage());   // 例外を表示する
    die();                                          // 処理を停止する
}