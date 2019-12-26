<?php

$i = 1;
$sum = 0;
while( $i <= 20 ){
    if( $i % 3 === 0 || $i % 5 === 0 ){
        echo $i.'は3か5の倍数<br>';
        $sum += $i; //前の値に上乗せする
    }
    $i++;
}

echo '合計は'.$sum;