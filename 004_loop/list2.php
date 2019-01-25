<html>
<head>
    <meta charset="utf-8" />
    <style>
        ul{width:100px;}
        .color-red{background-color:red;}
    </style>
</head>
<body>
    <!-- 流石にあたまがわるいのでちゃんとループで書きますん -->
    <ul>
    <?php
        for( $i = 1 ; $i <= 4 ; $i++ ){
            if( $i % 2 === 0 ){
                ?> <li class="color-red"><?php echo $i; ?> </li><?php
            }else{
                ?> <li><?php echo $i ?></li><?php
            }
        }
    ?>
    </ul>

</body>
</html>