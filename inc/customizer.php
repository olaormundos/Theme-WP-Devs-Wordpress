<?php
    function wpdevs_customizer( $wp_customize ) {
        // Copyright section
        $wp_customize->add_section(
            'sec_copyright',
            array(
                'title'        =>  __( 'Copyright Settings', 'wp-devs' ),
                'description'  =>  __( 'Copyright Settings', 'wp-devs' )
            )
        );

        $wp_customize->add_setting(
            'set_copyright',
            array(
                'type'               =>  'theme_mod',
                'default'            =>  __( 'Copyright 2024 - All Rights Reserved', 'wp-devs' ),
                'sanitaze_callback'  =>  'sanitaze_text_field'
            )
        );

        $wp_customize->add_control(
            'set_copyright',
            array(
                'label'        =>   __( 'Copyright Information', 'wp-devs' ),
                'description'  =>   __( 'Please, type your copyright here', 'wp-devs' ),
                'section'      =>   'sec_copyright',
                'type'         =>   'text'
            )
        );
        // Hero section
        $wp_customize->add_section(
            'set_hero',
            array(
                'title'        =>  __( 'Hero Section', 'wp-devs' ),
                'description'  =>  __( 'Hero Section Settings', 'wp-devs' )
            )
        );
        // Title Hero
        $wp_customize->add_setting(
            'set_hero_title',
            array(
                'type'               =>  'theme_mod',
                'default'            =>  __( 'Please, add some title', 'wp-devs' ),
                'sanitaze_callback'  =>  'sanitaze_text_field'
            )
        );

        $wp_customize->add_control(
            'set_hero_title',
            array(
                'label'        =>   __( 'Hero title', 'wp-devs' ),
                'description'  =>   __('Please, type your title here', 'wp-devs' ),
                'section'      =>   'set_hero',
                'type'         =>   'text'
            )
        );
        // Subtitle Hero
        $wp_customize->add_setting(
            'set_hero_subtitle',
            array(
                'type'               =>  'theme_mod',
                'default'            =>  __('Please, add some subtitle', 'wp-devs' ),
                'sanitaze_callback'  =>  'sanitaze_textarea_field'
            )
        );

        $wp_customize->add_control(
            'set_hero_subtitle',
            array(
                'label'        =>   __( 'Hero Subtitle', 'wp-devs' ),
                'description'  =>   __('Please, type your subtitle here', 'wp-devs' ),
                'section'      =>   'set_hero',
                'type'         =>   'textarea'
            )
        );
        // Button Hero text
        $wp_customize->add_setting(
            'set_hero_button_text',
            array(
                'type'               =>  'theme_mod',
                'default'            =>  __( 'Learn More', 'wp-devs' ),
                'sanitaze_callback'  =>  'sanitaze_text_field'
            )
        );

        $wp_customize->add_control(
            'set_hero_button_text',
            array(
                'label'        =>   __( 'Hero Text Button', 'wp-devs' ),
                'description'  =>   __( 'Please, type your hero button text here', 'wp-devs' ),
                'section'      =>   'set_hero',
                'type'         =>   'text'
            )
        );
        // Button Hero link
        $wp_customize->add_setting(
            'set_hero_button_link',
            array(
                'type'               =>  'theme_mod',
                'default'            =>  '#',
                'sanitaze_callback'  =>  'esc_url_raw'
            )
        );

        $wp_customize->add_control(
            'set_hero_button_link',
            array(
                'label'        =>   __( 'Hero Text Button', 'wp-devs' ),
                'description'  =>   __( 'Please, type your hero button link here', 'wp-devs' ),
                'section'      =>   'set_hero',
                'type'         =>   'url'
            )
        );
        // Hero heigth
        $wp_customize->add_setting(
            'set_hero_height',
            array(
                'type'               =>  'theme_mod',
                'default'            =>  800,
                'sanitaze_callback'  =>  'absint'
            )
        );

        $wp_customize->add_control(
            'set_hero_height',
            array(
                'label'        =>   __( 'Hero Heigth', 'wp-devs' ),
                'description'  =>   __( 'Please, type your here hero height here', 'wp-devs' ),
                'section'      =>   'set_hero',
                'type'         =>   'number'
            )
        );
        // Hero background
        $wp_customize->add_setting(
            'set_hero_background',
            array(
                'type'               =>  'theme_mod',
                'sanitaze_callback'  =>  'absint'
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Media_Control(
                $wp_customize,
                'set_hero_background',
                array(
                    'label'              =>  __( 'Hero image', 'wp-devs' ),
                    'section'            =>  'set_hero',
                    'mime_type'          =>  'image',
                )
            )
        );
        // 3. Blog
            $wp_customize->add_section( 
                'sec_blog', 
                array(
                    'title' => __( 'Blog Section', 'wp-devs' )
            ) );
    
            // Posts per page
            $wp_customize->add_setting( 
                'set_per_page', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'absint'
            ) );

            $wp_customize->add_control( 
                'set_per_page', 
                array(
                    'label' => __( 'Posts per page', 'wp-devs' ),
                    'description' => __( 'How many items to display in the post list?', 'wp-devs' ),			
                    'section' => 'sec_blog',
                    'type' => 'number'
            ) );

            // Post categories to include
            $wp_customize->add_setting( 
                'set_category_include', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
            ) );

            $wp_customize->add_control( 
                'set_category_include', 
                array(
                    'label' => __( 'Post categories to include', 'wp-devs' ),
                    'description' => __( 'Comma separated values or single category ID', 'wp-devs' ),
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );	

            // Post categories to exclude
            $wp_customize->add_setting( 
                'set_category_exclude', 
                array(
                    'type' => 'theme_mod',
                    'sanitize_callback' => 'sanitize_text_field'
            ) );

            $wp_customize->add_control( 
                'set_category_exclude', 
                array(
                    'label' => __( 'Post categories to exclude', 'wp-devs' ),
                    'description' => __( 'Comma separated values or single category ID', 'wp-devs' ),			
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );

    }
    add_action( 'customize_register', 'wpdevs_customizer' );