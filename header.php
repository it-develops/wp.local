<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php bloginfo('template_url'); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php bloginfo('template_url'); ?>/js/ie-emulation-modes-warning.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>
</head>

<body>
    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker())
                );
            ?>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
            <p class="lead blog-description"><?php bloginfo('description'); ?></p>
        </div>