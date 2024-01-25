<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    
                    <?php
                        get_template_part( 'templates-parts/home/section-slider', ); 
                        get_template_part( 'templates-parts/home/section-services', );
                        get_template_part( 'templates-parts/home/section-news' );
                    ?>        
                        
                </main>
            </div>
        </div>
<?php get_footer(); ?>