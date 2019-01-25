<?php

$language = 1;

if( $language === 1 ){
    echo 'こんにちは';
}else if( $language === 2 ){
    echo 'Hello';
}else if( $language === 3 ){
    echo 'Bonjour';
}else{
    echo '対応してない言語なんだよなぁ…';
}

/*
 '=='で判定すると、型の判定をすっぽかしやがるので
 基本的に厳密な'==='で判定することにするゾ
*/