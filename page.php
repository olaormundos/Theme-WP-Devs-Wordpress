<?php get_header(); ?>
    
    <img src="<?php header_image(); ?>" height="<?= get_custom_header()->height; ?>" width="<?= get_custom_header()->width; ?>" alt="">

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container">
                    <div class="page-item">
                        <?php while( have_posts() ): the_post(); ?>

                            <article>
                                <header>
                                    <h1>
                                        <?php the_title(); ?>
                                    </h1>
                                </header>
                                <?php the_content(); ?>
                            </article>

                        <?php endwhile; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>