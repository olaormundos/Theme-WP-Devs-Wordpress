<?php get_header(); ?>

    <?php get_template_part( 'templates-parts/custom-header-image' ); ?>
    
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <h1><?php _e( 'Blog', 'wp-devs' ) ?></h1>
                <div class="container">
                    <div class="blog-items">
                        <?php
                        if( have_posts() ):
                            while( have_posts() ): the_post();
                                get_template_part( 'templates-parts/index/content' );
                            endwhile;
                                get_template_part( 'templates-parts/index/paginacao' );
                        else: ?>
                            <p><?php _e( 'Nothing yet to be displayed!', 'wp-devs' ) ?></p>
                        <?php endif; ?>
                    </div>
                    <?= get_sidebar(); ?>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>