<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php the_title() ?></title>
    <?php wp_head(); ?>
    <?php
    include "views/header/favicon.php";
    ?>

    <?php
    //styles
    include "views/header/styles.php";
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;800&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<style>
    body {
        opacity: 0;
    }
    body.loaded {
        opacity: 1;
        transition: opacity .5s;
    }
</style>
<?php

include "views/header/nav.php";
include "views/header/mobile-menu.php";
?>

<main class="<?= $post->post_name;  ?>">
