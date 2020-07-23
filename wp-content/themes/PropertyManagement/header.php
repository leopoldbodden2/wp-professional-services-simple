<!DOCTYPE html>
<html lang="en" prefix="og:http://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- WORDPRESS HEADER -->
    <?php wp_head(); ?>
</head>
<body>
<?php get_template_part("template-parts/navbar", "default"); ?>
<div class="container-fluid">
    <?php if (has_custom_header()) : $header = get_header_image(); ?>
        <header id="header-front-page"
                class="row" <?= isset($header) ? "style='background-image:url({$header});'" : ''; ?>>
            <div class="container">
                <?php if (is_active_sidebar('custom-header-widget')) : ?>
                    <div id="header-widget-area" class="header-widget-area widget-area" role="complementary">
                        <?php dynamic_sidebar('custom-header-widget'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </header><!--/header-->
    <?php endif; ?>