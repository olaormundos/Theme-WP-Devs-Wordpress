<?php get_header(); ?>

<div id="primery">
    <div id="main">
        <div class="container">
            <?php
                while( have_posts() ): the_post();
                    
                    get_template_part( 'templates-parts/single/content-single', );
                    get_template_part( 'templates-parts/single/pagination-single' );

                    if( comments_open() || get_comments_number() ) {
                        comments_template();
                    }

                endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>