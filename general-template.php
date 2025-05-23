<?php
/*
Template Name: General Template
*/
?>




<?php get_header();  ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" 
width="<?php echo get_custom_header()->width ?>" alt=""> 
<!---->

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <section class="home-blog">
                <div class="container">
                    <div class="general-template">
                        <?php
                        if(have_posts()):
                            while(have_posts()): the_post();
                                ?>
                                <article>
                                   <h1><?php the_title(); ?></h1>
                                 
                                       <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                       <p>Categories: <?php the_category(); ?></p>
                                       <p>Tags: <?php the_tags(); ?></p>
                                      </div> 
                                   <?php the_content(); ?>
                                </article>
                                <?php 
                            endwhile;
                        else: ?>
                           <p><?php esc_html_('Nothing to be displayed' , 'wp-devs')?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
<!---->
<?php get_footer(); ?>




