<?php
/*やること
 ・西暦で現在の年を出力する
 ・forを使用してoptionタグを繰り返し出力する
 ・<select>タグのオプション部分をプログラムで作成する
 ・西暦：1950年から現在の年までオプションで表示する
 ・月日：月は12月まで、日付は31日まで選択可能にする
*/

//ちなみにここのPHPスペースはコメント文専用です.(ウンコード確定)
?>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <h1>生年月日を入力するフォームを作ろう</h1>
    
    <label for="year">西暦</label>
    <select name="year">
    <?php
    $now = date("Y");
    for( $i = 1950 ; $i <= $now ; $i++){ ?>
    <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php } ?>
    </select>年
    <br>

    <select name="month">
    <?php for( $i = 1 ; $i <= 12 ; $i++ ){?>
    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php } ?>
    </select>月
    
    <!--ここがプルダウンメニューにならないです……たすけて…………なんで……つんだ……-->
    <select name="day">
    <?php for ($i = 1; $i <= 31; $i++) { ?>
    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php } ?>
    </select>日
</body>
</html>

