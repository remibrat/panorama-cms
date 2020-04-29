<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <?php
        //hook
        wp_head();
    ?>
</head>
<body>
    <header>
        <h1>
            <?php bloginfo('name');?>
        </h1>
        <p>
            <?php bloginfo( 'description' );?>
        </p>
    </header>
</body>
</html>