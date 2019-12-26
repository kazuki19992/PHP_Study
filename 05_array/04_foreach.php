<?php

// 配列はキーごとに行を分けておくと見やすいです
$array = array(
    'name' => '佐藤',
    'hobby' => 'テニヌ',
    'email' => 'example1@example.com'
);

// foreach($array as $key => $var){
//     echo $key.':'.$var.'<br>';
// }

// foreachのキーを省略した書き方
foreach($array as $var){
    echo $var.'<br>';
}