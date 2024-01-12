<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div id="page" class="site">
        <header>
            <section class="top-bar">
                <div class="container">
                    <div class="logo">
                        Logo
                    </div>
                    <div class="searchbox">
                        Search
                    </div>
                </div>
            </section>
            <section class="menu-area">
                <div class="container">
                    <nav class="main-menu">
                        <button class="check-button">
                            <div class="menu-icon">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <?php wp_nav_menu( array(
                            'theme_location' => 'wp_devs_main_menu',
                            'depth'          => 1  
                        ) ); ?>
                    </nav>
                </div>
            </section>
        </header>