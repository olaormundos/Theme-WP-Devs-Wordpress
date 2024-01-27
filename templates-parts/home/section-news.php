<section class="home-blog">
    <h2>Latest News</h2>
    <div class="container">
        <?php

            $per_page         = get_theme_mod( 'set_per_page', 3 );
            $category_include = get_theme_mod( 'set_category_include' );
            $category_exclude = get_theme_mod( 'set_category_exclude' );

            $args = array(
                'posts_per_page'   => $per_page,
                'category__in'     => explode( ",", $category_include ),
                'category__not_in' => explode( ",", $category_exclude )
            );
            $postlist = new WP_Query( $args );     
            if( $postlist->have_posts() ):
            while( $postlist->have_posts() ): $postlist->the_post();
            ?> 
                <article class="latest-news">
                    <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </a>
                    <?php endif; ?>        
                    <h3>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?> 
                        </a>
                    </h3>
                    <p>
                        <div class="meta-info">
                            by <span><?php the_author_posts_link(); ?></span>
                            <?php if(has_category()): ?>
                                Categories: <span><?php the_category( ' ' ); ?></span>
                            <?php endif; ?>
                            <?php if(has_tag()): ?>    
                                Tags: <?php the_tags( '', ', ' ); ?>
                            <?php endif; ?>    
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