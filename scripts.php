<?php
wp_deregister_script('jquery');
wp_register_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js");

wp_enqueue_script('jquery');
wp_enqueue_script("interaction", get_template_directory_uri()."/js/interaction.js", array("jquery"), "1.4");
wp_enqueue_script("main", get_template_directory_uri()."/js/main.js", array("jquery", "interaction"), "1.4");

wp_enqueue_style("archivo_narrow", "http://fonts.googleapis.com/css?family=Roboto+Slab");
wp_enqueue_style("style", get_template_directory_uri()."/style.css", array(), "3.2");
