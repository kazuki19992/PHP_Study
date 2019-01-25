<?php
//論理演算子を使ってみる
$score = mt_rand(0,100);//0から100までの乱数発生マシン
echo '得点は'.$score.'やで<br>';

if( $score >= 0 && $score < 60 ){
    echo '平均点以下です';
}elseif( $score >= 60 && $score < 80 ){
    echo '平均点を超えています';
}elseif( $score >= 80 && $score < 100 ){
    echo '優秀な点数だで';
}elseif( $score === 100 ){
    echo 'おっぱいまん';
}else{
    echo '違うだろ～！！！！';
}