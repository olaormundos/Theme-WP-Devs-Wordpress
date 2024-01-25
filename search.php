<?php get_header(); ?>

<div id="primery">
    <div id="main">
        <div class="container">
            <h1>Result search for: <?= get_search_query(); ?></h1>
            <?php
                while( have_posts() ): the_post();
                    
                    get_template_part( 'templates-parts/search/content-search' );

                endwhile;
                the_posts_pagination();
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>