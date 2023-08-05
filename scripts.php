<?php
wp_deregister_script('jquery');
wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js");

wp_enqueue_script('jquery');
wp_enqueue_script("interaction", get_template_directory_uri()."/js/interaction.js", array("jquery"), "1.5");
wp_enqueue_script("main", get_template_directory_uri()."/js/main.js", array("jquery", "interaction"), "1.5");
/*wp_enqueue_script("gumroad", "https://gumroad.com/js/gumroad.js");*/

wp_enqueue_style("archivo_narrow", "https://fonts.googleapis.com/css?family=Roboto+Slab");
wp_enqueue_style("style", get_template_directory_uri()."/style.css", array(), "5.8");

wp_oembed_add_provider( '#https?://sketchfab\.com/.*#i', 'https://www.sketchfab.com/oembed', true );

/* Remove Gutenberg Block Library CSS from loading on the frontend
  html :where(img) { height: auto; max-width: 100%; } */

function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );