    <?php
        $hero_title  = get_theme_mod( 'set_hero_title', 'WP Devs' );
        $hero_subtitle = get_theme_mod( 'set_hero_subtitle', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed impedit animi non eum facilis harum accusantium vitae amet' );
        $hero_button_text = get_theme_mod( 'set_hero_button_text', 'Learn More...' );
        $hero_button_link = get_theme_mod( 'set_hero_button_link', '#' );
        $hero_height      = get_theme_mod( 'set_hero_height', 800 );
        $hero_background  = wp_get_attachment_url( get_theme_mod('set_hero_background') );
    ?>
    
    <section class="hero" style="background-image: url('<?= $hero_background ?>')" >
        <div class="overlay" style="min-height:<?= $hero_height ?>px" >
            <div class="container">
                <div class="hero-items">
                    <h1><?= $hero_title ?></h1>
                    <p><?= nl2br($hero_subtitle) ?></p>
                    <a href="<?= $hero_button_link ?>"><?= $hero_button_text ?></a>
                </div>
            </div>
        </div>
    </section>