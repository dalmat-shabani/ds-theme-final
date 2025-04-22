<article class="latest-news"><?php the_permalink(); ?>
    <a href=""><?php the_post_thumbnail('large') ?></a>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2>
    <div class="meta-info"></a> 
        <p>
        By <span><?php the_author_posts_link(); ?></span>
        <?php if( has_category('') ) ?>
        <p>Catgeries: <?php the_category( ' '); ?> </p>
        <?php endif; ?>
        <?php if( has_tag() ) ?>
        <p>Tags: <?php the_tags('', ','); ?></p>
        <?php endif(); ?>
        </p>
        <p><span><?php echo get_the_date(); ?></span></p>
    </div>
    <?php the_excerpt(); ?>
        <?php  ?> 
    <?php the_content(); ?>
</article>