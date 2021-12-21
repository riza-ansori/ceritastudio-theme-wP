<?php

function theme_support_options() {
    $defaults = array(
    'height'      => 150,
    'width'       => 250,
    'flex-height' => false, // <-- setting both flex-height and flex-width to false maintains an aspect ratio
    'flex-width'  => false
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   // call the function in the hook
   add_action( 'after_setup_theme', 'theme_support_options' );