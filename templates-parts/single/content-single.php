    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
            <h1>
                <?php the_title(); ?>   
            </h1>
        </header>
        <div class="meta-info">
            <p><?php esc_html_e( 'Posted in', 'wp-devs' ) ?> <?= esc_html( get_the_date() ); ?> by <?php the_author_posts_link(); ?></p>
            <?php if(has_category()): ?>
                <p><?php esc_html_e( 'Categories', 'wp-devs' ) ?>: <?php the_category( ' ' ); ?></p>
            <?php endif; ?>
            <?php if(has_tag()): ?>    
                <p><?php esc_html_e( 'Tags', 'wp-devs' ) ?>: <?php the_tags( '', ', ' ); ?></p>
            <?php endif; ?>   
        </div>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </article>