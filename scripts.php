<?php
wp_deregister_script('jquery');
wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js");
wp_enqueue_script('jquery');

wp_enqueue_script("interaction", get_template_directory_uri()."/js/interaction.js", array("jquery"), "1.8");
wp_enqueue_script("main", get_template_directory_uri()."/js/main.js", array("jquery", "interaction"), "1.5");

wp_enqueue_style("archivo_narrow", "https://fonts.googleapis.com/css?family=Roboto+Slab");
wp_enqueue_style("style", get_template_directory_uri()."/style.css", array(), "6.3");

wp_oembed_add_provider( '#https?://sketchfab\.com/.*#i', 'https://www.sketchfab.com/oembed', true );

/* Remove Gutenberg Block Library CSS from loading on the frontend, and other editor CSS that this theme doesn't use */
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' );
}, 100 );
