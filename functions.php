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

/* custom post testimoni */
add_action( 'init', 'testimoni_custom_post_type' );
function testimoni_custom_post_type() {
    //posttypename = testimoni
    $labels = array(
    'name' => _x( 'Testimoni', 'testimoni' ),
    'singular_name' => _x( 'testimoni', 'testimoni' ),
    'add_new' => _x( 'Add New', 'testimoni' ),
    'add_new_item' => _x( 'Add New testimoni', 'testimoni' ),
    'edit_item' => _x( 'Edit testimoni', 'testimoni' ),
    'new_item' => _x( 'New testimoni', 'testimoni' ),
    'view_item' => _x( 'View testimoni', 'testimoni' ),
    'search_items' => _x( 'Search testimoni', 'testimoni' ),
    'not_found' => _x( 'No testimoni found', 'testimoni' ),
    'not_found_in_trash' => _x( 'No testimoni found in Trash', 'testimoni' ),
    'parent_item_colon' => _x( 'Parent testimoni:', 'testimoni' ),
    'menu_name' => _x( 'Testimoni Video', 'testimoni' ),
    );
    $args = array(
            'labels' => $labels,
            'hierarchical' => true,
            'description' => 'Hi, this is my custom post type.',
            'supports' => array( 'title', 'author', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'page-category' ),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'has_archive' => true,
            'query_var' => true,
            'can_export' => true,
            'rewrite' => true,
            'capability_type' => 'post'
    );
    register_post_type( 'testimoni', $args );
}