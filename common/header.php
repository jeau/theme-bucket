<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo option('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>
    <meta name="viewport" content="width=device-width">

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_theme_header'); ?>

    <!-- Style Sheets -->
    <?php echo head_css(); ?>

    <!-- JavaScripts -->
    <?php echo head_js(); ?>
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>

<?php fire_plugin_hook('public_theme_body'); ?>

    <header role="banner">

        <?php fire_plugin_hook('public_page_header'); ?>

        <h1 id="site-title"><?php echo link_to_home_page(custom_display_logo()); ?></h1>

        <div id="search-container">
        <?php echo simple_search_form(); ?>
        <?php echo link_to_item_search(); ?>
        </div>

        <nav role="navigation">
            <?php echo public_nav_main(); ?>
        </nav>

    </header>

    <div role="main">

        <?php fire_plugin_hook('public_theme_page_content'); ?>

