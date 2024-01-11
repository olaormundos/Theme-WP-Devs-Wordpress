<?php

    function wpdevs_load_scripts() {
        wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory(). '/style.css' ), 'all' );
        wp_enqueue_style( 'wpdevs-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );

        wp_enqueue_script( 'wpdevs-dropdown', get_template_directory_uri(). '/js/dropdown.js', array(), '1.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );