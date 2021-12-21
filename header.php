<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/bootstrap/css/bootstrap.min.css'; ?>">

        <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,600&display=swap" rel="stylesheet">
        <!-- fontawesome -->
        <link href="<?php echo get_stylesheet_directory_uri().'/fontawesome/css/all.css" rel="stylesheet'; ?>">
        <script src="https://kit.fontawesome.com/5982fa9774.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <title>Tutorial theme</title>

        <?php wp_head(); ?>
    </head>

    <body>
        <header class="navbar navbar-light">
            <div class="container">
                <nav class="w-100">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="<?=home_url()?>" class="navbar-brand logo">
                            <span class="logo-sm">
                            <?php
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                        echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
                                } else {
                                        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                                }
                            ?>
                            </span>
                        </a>
                        <div class="wrap-menu-customm">
                            <a href="#" class="menu-btn">
                                <span></span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="wrap-full-menu">
                <div class="container">
                    <ul class="list-menu">
                        <li><a class="nav-item" href="#">Action</a></li>
                        <li><a class="nav-item" href="#">Another action</a></li>
                        <li><a class="nav-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </header>
                    
                        
        