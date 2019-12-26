<?php
// undefinedが出ないように対策する
$movie = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // POST送信されたら以下の処理を実行する

    // ポスト内容を確認し、正しいかどうか判断する
    $movie = $_POST['movie'];

    if(mb_strlen($movie) === 0){
        // 文字数が0だった場合
        $err = '文字を入力してください';
    }elseif(mb_strlen($movie) > 20){
        // 20文字を超えていた場合
        $err = '20文字以内で入力してください';
    }

}
?>

<html>
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            .center{
                text-align: center;
            }
            input{
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <div class="center">
            <h1>フォームを検証しよう</h1>
            <p>
                <?php
                // 入力内容にエラーがあればエラーメッセージ
                // なければ「あなたの好きな映画は〜〜です」と出力
                if(isset($err)){
                    echo $err;
                }else{
                    echo 'あなたの好きな映画は' .$movie .'です。';
                }
                ?>
            </p>

            <!-- actionが空の場合、同じファイルに送信 -->
            <form action="" method="POST">
                <label>好きな映画</label>
                <input type="text" name="movie"><br>
                <input type="submit">
            </form>
        </div>
    </body>
</html>