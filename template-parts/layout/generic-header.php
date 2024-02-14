<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pmstylesoup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?>/style.css">
</head>

<body>
    <div id="page">
        <a href="#content" class="sr-only"><?php esc_html_e('Skip to content', 'pmstylesoup'); ?></a>
        <div id="content">
            <?php include_once 'hero.php'; ?>