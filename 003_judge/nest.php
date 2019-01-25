<?php
//ネスト

$attend = 1;
//欠席は0 出席は1
$place ='b';

if( $attend === 0 ){
    echo 'パーティ欠席にて承りました';
}else if( $attend === 1 ){
    echo 'パーティ出席にて承りました<br>';
    if ($place === 'a') {
        echo '会場は野獣邸です';
    } else if ($place === 'b') {
        echo '会場は岡山の県北です';
    }
}