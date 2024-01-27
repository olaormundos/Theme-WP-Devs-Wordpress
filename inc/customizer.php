<?php
    function wpdevs_customizer( $wp_customize ) {
        // Copyright section
        $wp_customize->add_section(
            'sec_copyright',
            array(
                'title'        =>  'Copyright Settings',
                'description'  =>  'Copyright Settings'
            )
        );

        $wp_customize->add_setting(
            'set_copyright',
            array(
                'type'               =>  'theme_mod',
                'default'            =>  'Copyright 2024 - All Rights Reserved',
                'sanitaze_callback'  =>  'sanitaze_text_field'
            )
        );

        $wp_customize->add_control(
            'set_copyright',
            array(
                'label'        =>   'Copyright Information',
                'description'  =>   'Please, type your copyright here',
                'section'      =>   'sec_copyright',
                'type'         =>   'text'
            )
        );
        // Hero section
        $wp_customize->add_section(
            'set_hero',
            array(
                'title'        =>  'Hero Section',
                'description'  =>  'Hero Section Settings'
            )
        );
        // Title Hero
        $wp_customize->add_setting(
            'set_hero_title',
            array(
                'type'               =>  'theme_mod',
                'default'            =>  'Please, add some title',
                'sanitaze_callback'  =>  'sanitaze_text_field'
            )
        );

        $wp_customize->add_control(
            'set_hero_title',
            array(
                'label'        =>   'Hero title',
                'description'  =>   'Please, type your title here',
                'section'      =>   'set_hero',
                'type'         =>   'text'
            )
        );
        // Subtitle Hero
        $wp_customize->add_setting(
            'set_hero_subtitle',
            array(
                'type'               =>  'theme_mod',
                'default'            =>  'Please, add some subtitle',
                'sanitaze_callback'  =>  'sanitaze_textarea_field'
            )
        );

        $wp_customize->add_control(
            'set_hero_subtitle',
            array(
                'label'        =>   'Hero Subtitle',
                'description'  =>   'Please, type your subtitle here',
                'section'      =>   'set_hero',
                'type'         =>   'textarea'
            )
        );
        // Button Hero text
        $wp_customize->add_setting(
            'set_hero_button_text',
            array(
                'type'               =>  'theme_mod',
                'default'            =>  'Learn More',
                'sanitaze_callback'  =>  'sanitaze_text_field'
            )
        );

        $wp_customize->add_control(
            'set_hero_button_text',
            array(
                'label'        =>   'Hero Text Button',
                'description'  =>   'Please, type your hero button text here',
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
                'label'        =>   'Hero Text Button',
                'description'  =>   'Please, type your hero button link here',
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
                'label'        =>   'Hero Heigth',
                'description'  =>   'Please, type your here hero height here',
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
                    'label'              =>  'Hero image',
                    'section'            =>  'set_hero',
                    'mime_type'          =>  'image',
                )
            )
        );
        // 3. Blog
            $wp_customize->add_section( 
                'sec_blog', 
                array(
                    'title' => 'Blog Section'
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
                    'label' => 'Posts per page',
                    'description' => 'How many items to display in the post list?',			
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
                    'label' => 'Post categories to include',
                    'description' => 'Comma separated values or single category ID',
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
                    'label' => 'Post categories to exclude',
                    'description' => 'Comma separated values or single category ID',			
                    'section' => 'sec_blog',
                    'type' => 'text'
            ) );

    }
    add_action( 'customize_register', 'wpdevs_customizer' );