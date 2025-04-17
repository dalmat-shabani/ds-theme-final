<?php get_header(); ?>



<div class="primary">
    <div class="main">
        <div class="container">
            <?php
            while( have_posts()):
                the_post();
                ?>
                <article>
                
                <header>
                    <h1><?php the_title(); ?></h1>
                    <?php
                    if (has_post_thumbnail()){
                        the_post_thumbnail(array(275,275));
                    } else {
                          echo '<img src="' . get_template_directory_uri() . '/images/default-thumbnail.png" alt="' . esc_attr(get_the_title()) . '" />';  
                    }
                     ?>

                    
                    <div class="meta-info">
                         <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link();?></p>
                         <p>Catgeries: <?php the_category( ' '); ?> </p>
                         <p> <?php the_tags('', ','); ?></p>
                    </div>
                </header>
                <div class="content">
                   <?php the_content(); ?>
                </div>
                </article>

                <div class="wpdevs-pagination">
                     <div class="pages next">
                        <?php next_post_link('&laquo , %link'); ?>                                
                    </div>
                    </div>
                    <div class="pages old">
                        <?php previous_post_link("%link &raquol"); ?>

                </div>



                <?php
                if(comments_open() | get_comments_number()){
                    comments_template();
                }
            endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>