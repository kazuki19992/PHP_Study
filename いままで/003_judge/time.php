<?php
//比較演算子の使用
$time = date('G'); //現在時刻の取得

if( $time < 12 ){
    echo '午前です';
}else if( $time >= 12 ){
    echo '午後です';
}