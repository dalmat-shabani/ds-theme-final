<article>
    <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
    <a href="<?php the_permalink();?>"><?php the_post_thumbnail(array(275,275)); ?></a> 
    <div class="meta-info">    
        <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
        <?php if( has_category('') ) ?>
        <p>Catgeries: <?php the_category( ' '); ?> </p>
        <?php endif; ?>
        <?php if( has_tag() ) ?>
        <p>Tags: <?php the_tags('', ','); ?></p>
        <?php endif(); ?>
    </div> 
    <?php the_excerpt(); ?>
</article>