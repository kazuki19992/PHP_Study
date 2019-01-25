<?php
//バリデーション機能の実装

/*
やること
 ・空(文字数0)で送信していないかチェック
 ・20文字をオーバーしていないかチェック
 ・エラー発生時は内容を出力する
*/

//ポスト内容を取得し、入力値が正しいか検証する。
$movie = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $movie = $_POST['movie'];

    if( mb_strlen($movie) === 0 ){ //movieの文字数が0のときや、20字より多いときにエラーメッセージ
        $err = '文字入れろこのやろー';
    }else if( mb_strlen($movie) > 20 ){
        $err = '文字数が多すぎるぞこのやろー';
    }
}
?>

<html>
<head>
    <meta charset="utf-8" />
    
    <!--ここからCSS…かな?--->
    <style type="text/css">
    .center{text-align:center;}
    input{margin:5px;}
    </style>
    <!--たぶんここまでCSS-->

</head>

<body>
    <div class="center">
    <h1>入力フォームを検証しよう</h1>
    
    <p>
    <?php
    /*
     入力内容に誤りがあればエラーメッセージを出す
     正しければ「あなたの好きな映画はXXXです」と出力
    */
    
    if( isset($err) ){ //isset[イズセット]：変数がすでにセットされているか調べる関数
        echo $err;
    }else{
        echo 'あなたの好きな映画は'.$movie.'です';
    }

    ?>
    </p>

    <!-- actionが空の場合は同じファイルに送信 -->
    <form action="" method="POST"> 
        <label>好きな映画</label>
        <input type="text" name="movie"><br>
        <input type="submit">
    </form>
    
    </div>

</body>
</html>