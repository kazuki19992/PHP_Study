<?php

$array = array(
    'name' => '鈴木',
    'hobby' => 'テニヌ',
    'email' => 'sample@sample.com'
);

foreach($array as $var){ //foreachのキーは省略できるっぽい. arrayの要素をvarとして取り出してるらしい
    echo $var.'<br>';
}