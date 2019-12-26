<?php
// まずは簡単なif文から

$lang = 1;

if( $lang === 1){
    echo 'こんちは';
}elseif( $lang === 2){
    echo 'Hello';
}elseif( $lang === 3){
    echo 'Bonjour';
}else{
    echo 'err';
}