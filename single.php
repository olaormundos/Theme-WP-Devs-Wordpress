<?php get_header(); ?>

<div id="primery">
    <div id="main">
        <div class="container">
            <?php
                while( have_posts() ): the_post();
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header>
                                <h1>
                                    <?php the_title(); ?>   
                                </h1>
                            </header>
                            <div class="meta-info">
                                <p>Posted in <?= get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                            </div>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                        </article>

                        <div class="wpdevs-pagination">
                            <div class="pages next">
                                <?php next_post_link( '&laquo; %link' ); ?>
                            </div>
                            <div class="pages previous">
                                <?php previous_post_link( '%link &raquo' ); ?>
                            </div>
                        </div>
                    <?php

                    if( comments_open() || get_comments_number() ) {
                        comments_template();
                    }

                endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>