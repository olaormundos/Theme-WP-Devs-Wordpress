<?php get_header(); ?>

<div id="primery">
    <div id="main">
        <div class="container">
            <?php
                while( have_posts() ): the_post();
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header>
                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>   
                                </h2>
                            </header>
                            <div class="meta-info">
                                <p>Posted in <?= get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                <p>Categories: <?php the_category( ' ' ); ?></p>
                                <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                            </div>
                            <?php the_excerpt(); ?>
                        </article>
                    <?php
                endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>