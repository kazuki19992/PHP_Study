<?php

$score = 82;
if($score >= 0 && $score < 60){
    echo '再履おめでとうございます！';
}elseif($score >= 60 && $score < 80){
    echo 'うーん…合格！ｗ';
}elseif($score >= 80 && $score < 100){
    echo 'やるやん';
}elseif($score === 100){
    echo '俺の負け！ｗ';
}else{
    echo '不正な点数故に再履！ｗ';
}