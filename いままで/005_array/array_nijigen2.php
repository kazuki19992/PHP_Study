<?php
//2次元配列やっていき

$arrays = array(

    0 => array(
        'name' => '野獣',
        'hobby' => '空手',
        'email' => 'sample@sample.com'
    ),
    1 => array(
        'name' => '池沼',
        'hobby' => 'そうだよ(便乗)',
        'email' => 'sample2@samole.com'
    ),
    2 => array(
        'name' => 'KMR',
        'hobby' => 'やめてくれよ……(タメ口)',
        'email' => 'sample3@sample.com'
    )

);

// echo $array[1]['name'];

?>
<html>
<body>
    <table border="1">
    <tr><th>名前</th><th>趣味</th><th>メールアドレス</th></tr>
    <?php foreach($arrays as $row){ ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['hobby']; ?></td>
        <td><?php echo $row['email']; ?></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>