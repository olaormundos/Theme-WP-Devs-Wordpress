<?php get_header(); ?>

    <img src="<?php header_image(); ?>" height="<?= get_custom_header()->height; ?>" width="<?= get_custom_header()->width; ?>" alt="">
    
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <h1>Blog</h1>
                <div class="container">
                    <div class="blog-items">
                        <?php
                        if( have_posts() ):
                            while( have_posts() ): the_post();
                                get_template_part( 'templates-parts/index/content' );
                            endwhile;
                                get_template_part( 'templates-parts/index/paginacao' );
                        else: ?>
                            <p>Nothing yet to be displayed!</p>
                        <?php endif; ?>
                    </div>
                    <?= get_sidebar(); ?>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>