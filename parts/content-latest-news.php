<article class="latest-news">
    <?php the_permalink(); ?>
    <a href=""><?php the_post_thumbnail('large'); ?></a>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <div class="meta-info">
        <p>
            By <span><?php the_author_posts_link(); ?></span>
            <?php if (has_category()) { ?>
                <p>Categories: <?php the_category(' '); ?></p>
            <?php } ?>
            <?php if (has_tag()) { ?>
                <p>Tags: <?php the_tags('', ','); ?></p>
            <?php } ?>
        </p>
        <p><span><?php echo get_the_date(); ?></span></p>
    </div>
    <?php the_excerpt(); ?>
    <?php the_content(); ?>
</article>
