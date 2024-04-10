<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    
    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

</head>

<body <?php body_class(); ?>>

<header class="header">
    <a href="<?php echo home_url( '/' ); ?>">
      <img id="logo" src="<?php echo get_template_directory_uri(); ?>/logo_the.jpg" alt="Logo">
    </a> 
    <div id="div-tete">
        <span class="name-job"><?=bloginfo('name') ;?></span>
        <span class="name-job"><?=bloginfo('description') ;?></span>
    </div>
    
    <nav>
        <?php
            wp_nav_menu([
                'theme_location' => 'header', 
                'menu_class' => 'test-menu'
            ]);
        ?>
    </nav>
  </header>
    
    <?php wp_body_open(); ?>
    
    <main>
        