<?php

$language = 2;

switch($language){
    case 1:
        echo 'こんちは';
        break;
    case 2:
        echo 'Hello';
        break;
    case 3:{
        // 実は{}をつけたほうが自動インデント入って見やすい
        // もちろん{}無くても大丈夫です。
        echo 'Bonjour';
        break;
    }
    default:{
        echo 'err';
    }
}