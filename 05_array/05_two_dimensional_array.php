<?php
$arrays = array(

    0 => array(
        'name' => '佐藤',
        'age' => 20, 
        'email' => 'example1@example.com'
    ),

    1 => array(
        'name' => '鈴木',
        'age' => 25, 
        'email' => 'example2@example.com'
    ),

    2 => array(
        'name' => 'わし',
        'age' => 53, 
        'email' => 'example3@example.com'
    ),
);
?>
<html>
    <body>
        <table border="1">
            <tr>
                <th>名前</th><th>趣味</th><th>メアド</th>
            </tr>
            <?php foreach($arrays as $row){ ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>