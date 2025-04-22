<?php get_header(); ?>

<div class="primary">
    <div class="main">
        <div class="container">

        <h3>Search results for : <?php echo get_search_query(); ?></h3>
        
            <?php

            echo get_search_form();



            while( have_posts()):
                the_post();
                get_template_part('parts/content', 'search');
                
            endwhile;
            the_posts_pagination();
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>