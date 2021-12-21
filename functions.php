<?php
// Dynamic Logo
function theme_support_options() {
    $defaults = array(
    'height'      => 150,
    'width'       => 250,
    'flex-height' => false, // <-- setting both flex-height and flex-width to false maintains an aspect ratio
    'flex-width'  => false
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'theme_support_options' );

// Dynamic menu
register_nav_menus(array(
    'primary' => __('Primary Menu', 'My_First_WordPress_Theme'),
    'secondary' => __('Secondary Menu',       'My_First_WordPress_Theme'),
    // 'My_custome_menu' => __('finally Menu', 'My_First_WordPress_Theme')
));