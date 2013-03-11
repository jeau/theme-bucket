<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title><?php echo option('site_title'); echo isset($title) ? ' | ' . strip_formatting($title) : ''; ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Style Sheets -->
    <?php 
    queue_css_file('style');
    queue_css_file('ie', 'css', array('conditional' => '(gte IE 6)&(lte IE 8)'));
    queue_css_url('http://fonts.googleapis.com/css?family=Titillium+Web:400,400italic,700,700italic,200,200italic');
    queue_css_url('http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic');
    echo head_css(); 
    ?>

    <!-- JavaScripts -->
    <?php 
    queue_js_file('vendor/modernizr');
    queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)'));
    queue_js_file('vendor/respond');
    queue_js_file('globals');
    echo head_js(); 
    ?>
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>

<?php fire_plugin_hook('public_theme_body'); ?>

    <header role="banner">

        <?php fire_plugin_hook('public_page_header'); ?>

        <h1 id="site-title"><?php echo link_to_home_page(theme_logo()); ?></h1>

        <nav id="top-nav">
            <a href="#search" class="icon-search">
              <span aria-hidden="true" data-icon="&#xe000;"></span>
              <span class="screen-reader-text">Search</span>
            </a>
            <a href="#menu" class="icon-menu">
              <span aria-hidden="true" data-icon="&#xe005;"></span>
              <span class="screen-reader-text">Menu</span>
            </a>            
            <div id="search-container">
            <?php echo search_form(array('show_advanced' => true)); ?>
            </div>
            <div id="menu-container">
            <?php echo public_nav_main(); ?>
            </div>
        </nav>

    </header>

    <div role="main">

        <?php fire_plugin_hook('public_theme_page_content'); ?>

