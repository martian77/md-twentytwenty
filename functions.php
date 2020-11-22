<?php

/**
 * Register and Enqueue Styles.
 */
function md_twentytwenty_register_styles() {
    wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'md_twentytwenty_register_styles' );
