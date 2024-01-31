    <?php
        $hero_title  = get_theme_mod( 'set_hero_title', esc_html__( 'WP Devs', 'wp-devs' ) );
        $hero_subtitle = get_theme_mod( 'set_hero_subtitle', esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed impedit animi non eum facilis harum accusantium vitae amet', 'wp-devs' ) );
        $hero_button_text = get_theme_mod( 'set_hero_button_text', esc_html__( 'Learn More...', 'wp-devs' ) );
        $hero_button_link = get_theme_mod( 'set_hero_button_link', '#' );
        $hero_height      = get_theme_mod( 'set_hero_height', 800 );
        $hero_background  = wp_get_attachment_url( get_theme_mod('set_hero_background') );
    ?>
    
    <section class="hero" style="background-image: url('<?= esc_url( $hero_background ); ?>')" >
        <div class="overlay" style="min-height:<?= esc_attr( $hero_height ) ?>px" >
            <div class="container">
                <div class="hero-items">
                    <h1><?= esc_html( $hero_title ) ?></h1>
                    <p><?= nl2br esc_html( ($hero_subtitle) ) ?></p>
                    <a href="<?= esc_url( $hero_button_link ) ?>"><?= esc_html( $hero_button_text ) ?></a>
                </div>
            </div>
        </div>
    </section>