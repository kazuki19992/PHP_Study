<?php

$array = array(
    'name' => '野獣',
    'age' => 27,
    'blood' => 'AB'
);

echo $array['age'].'<br>';
foreach( $array as $var ){
    echo $var.'<br>';
}