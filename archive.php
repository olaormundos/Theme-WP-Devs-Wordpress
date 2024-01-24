<?php get_header(); ?>

    <img src="<?php header_image(); ?>" height="<?= get_custom_header()->height; ?>" width="<?= get_custom_header()->width; ?>" alt="">
    
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php 
                    the_archive_title( '<h1 class="archive-title">', '</h1>' ); 
                    the_archive_description( '<div class="archive-description">', '</div>' );
                ?>
                <div class="container">
                    <div class="archive-items">
                        <?php
                        if( have_posts() ):
                            while( have_posts() ): the_post();
                                get_template_part( 'templates-parts/archive/content-archive' );
                            endwhile;
                                get_template_part( 'templates-parts/archive/paginacao-archive' );
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