    <article>
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>    
        </h2>
        <?php if(has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
            </a> 
        <?php endif; ?>       
        <div class="meta-info">
            <p><?php esc_html_e( 'Posted in', 'wp-devs' ); ?> <?= esc_html( get_the_date() ); ?> <?php _e( 'by', 'wp-devs' ); ?> <?php the_author_posts_link(); ?></p>
            <?php if(has_category()): ?>
                <p><?php esc_html_e( 'Categories', 'wp-devs' ); ?>: <?php the_category( ' ' ); ?></p>
            <?php endif; ?>
            <?php if(has_tag()): ?>    
                <p><?php esc_html_e( 'Tags', 'wp-devs' ); ?>: <?php the_tags( '', ', ' ); ?></p>
            <?php endif; ?>
        </div>
        <?php the_excerpt(); ?>
    </article>