<section class="home-blog">
    <h2>Latest News</h2>
    <div class="container">
        <?php
            $args = array(
                'posts_per_page'   => 5,
                'category__in'     => array( 4, 5, 6 ),
                'category__not_in' => array( 1, 7, 8 )
            );
            $postlist = new WP_Query( $args );     
        if( $postlist->have_posts() ):
            while( $postlist->have_posts() ): $postlist->the_post();
            ?> 
                <article class="latest-news">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </a>    
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?> 
                        </a>
                    </h3>
                    <p>
                        <div class="meta-info">
                            by <span><?php the_author_posts_link(); ?></span>
                            Categories: <span><?php the_category( ' ' ); ?></span>
                            Tags: <?php the_tags( '', ', ' ); ?>
                        </div>
                        <p>
                            <span>
                                <?= get_the_date(); ?>
                            </span>
                        </p>
                    </p>
                    <?php the_excerpt(); ?>
                </article>

            <?php
            endwhile;
            wp_reset_postdata();
        else: ?>
            <p>Nothing yet to be displayed!</p>
        <?php endif; ?>
    </div>
</section>    