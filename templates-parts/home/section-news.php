<section class="home-blog">
    <h2><?php _e( 'Latest News', 'wp-devs' ) ?></h2>
    <div class="container">
        <?php

            $per_page         = get_theme_mod( 'set_per_page', 3 );
            $category_include = get_theme_mod( 'set_category_include' );
            $category_exclude = get_theme_mod( 'set_category_exclude' );

            $args = array(
                'posts_per_page'   => esc_html( $per_page ),
                'category__in'     => explode( ",", esc_html(  $category_include ) ),
                'category__not_in' => explode( ",", esc_html(  $category_exclude ) )
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
                            <?php esc_html_e( 'by', 'wp-devs' ) ?> <span><?php the_author_posts_link(); ?></span>
                            <?php if(has_category()): ?>
                                <?php esc_html_e( 'Categories', 'wp-devs' ) ?>: <span><?php the_category( ' ' ); ?></span>
                            <?php endif; ?>
                            <?php if(has_tag()): ?>    
                                <?php esc_html_e( 'tags', 'wp-devs' ) ?>: <?php the_tags( '', ', ' ); ?>
                            <?php endif; ?>    
                        </div>
                        <p>
                            <span>
                                <?= esc_html( get_the_date() ); ?>
                            </span>
                        </p>
                    </p>
                    <?php the_excerpt(); ?>
                </article>

            <?php
            endwhile;
            wp_reset_postdata();
        else: ?>
            <p><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-devs' ) ?></p>
        <?php endif; ?>
    </div>
</section>    