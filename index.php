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
                            ?>

                                <article>
                                    <h2>
                                        <?php the_title(); ?>
                                    </h2>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                    <div class="meta-info">
                                        <p>Posted in <?= get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                        <p>Categories: <?php the_category( ' ' ); ?></p>
                                        <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                                    </div>
                                    <?php the_content(); ?>
                                </article>

                            <?php
                            endwhile;
                        else: ?>
                            <p>Nothing yet to be displayed!</p>
                        <?php endif; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>