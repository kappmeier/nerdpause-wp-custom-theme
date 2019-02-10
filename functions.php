<?php
    function nerdpause_theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'android-animation', get_stylesheet_directory_uri() . '/android.css' );
    }

    add_action( 'wp_enqueue_scripts', 'nerdpause_theme_enqueue_styles' );
?>
