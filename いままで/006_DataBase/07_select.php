<?php

$dsn = 'mysql:dbname=sample;host=localhost;charset=utf8';      // DBの情報を設定
// mysqlを使用し、dbname(DB名)はsample, host(ドメイン名)はlocalhost

$user = 'root';                                                 // ユーザー名(本番ではrootは使わない)
$password = '';                                                 // パスワードは未設定のため空


try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM user";                    // 全件取得する
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $data = array();                                // 配列を宣言
    $count = $stmt->rowCount();                     // 件数を取得する
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){   // 一行ずつデータを取得
        $data[] = $row;                             // 配列$dataに行を格納していく
    }
    echo '接続に成功しています<BR>';

}catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}
?>

<html>
    <body>
        <h1>会員データ</h1>
        <table border="1">
            <tr>
                <th>id</th>
                <th>名前</th>
                <th>年齢</th>
                <th>メールアドレス</th>
            </tr>
            <?php foreach($data as $row): // $dataを$rowとして取り出す ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <?php endforeach;   //foreachの終わり ?>
        </table>
    </body>
</html>