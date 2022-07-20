<!doctype html>
<html lang="fa" class="container-fluid">
<head>
    <title>فروشگاه آفر |
        <?php if (isset($title)) echo $title; ?>
    </title>
    <?php get_template_part('head'); ?>
</head>
<body class="row gx-10 gy-2 bg-light">
<div class='min-height-300 bg-primary position-absolute w-100'></div>
<?php get_sidebar(null, 'panel/'); ?>
<main class="position-relative mx-auto container col-12 col-lg">
    <?php get_header(null, 'panel/'); ?>
    <?php
    //main();
    if (isset($alerts))
        echo $alerts;

    if (isset($main))
        eval($main);
    ?>
</main>
<?php get_footer(null, 'panel/'); ?>
<?php get_template_part('scripts'); ?>
</body>
</html>