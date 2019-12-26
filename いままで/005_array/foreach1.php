<?php

$array = array(
    'name' => '鈴木',
    'hobby' => 'テニヌ',
    'email' => 'sample@sample.com'
);

foreach($array as $key => $var){ //$keyにキー名(hobbyとか)、$varにデータが代入される
    echo $key.':'.$var.'<br>';
}