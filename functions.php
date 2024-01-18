<?php

    function wpdevs_load_scripts() {
        wp_enqueue_style( 'wpdevs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory(). '/style.css' ), 'all' );
        wp_enqueue_style( 'wpdevs-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );

        wp_enqueue_script( 'wpdevs-dropdown', get_template_directory_uri(). '/js/dropdown.js', array(), '1.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'wpdevs_load_scripts' );

    function wpdevs_config() {

        register_nav_menus( 
            array(
                'wp_devs_main_menu'   => 'Main Menu',
                'wp_devs_footer_menu' => 'Footer Menu'  
            )
        );

        $args = array(
            'height'    => 225,
            'width'     => 1920
        );
        add_theme_support( 'custom-header', $args );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-logo', array(
            'width'      => 200,
            'heigth'     => 110,
            'flex-width'      => true,
            'flex-height'     => true
        ) );

    }
    add_action( 'after_setup_theme', 'wpdevs_config', 0 );