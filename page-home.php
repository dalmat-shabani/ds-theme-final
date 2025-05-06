<?php get_header();  ?>

<!---->

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            $hero_title = get_theme_mod('set_hero_title' , 'Please , type some title');
            $hero_subtitle = get_theme_mod('set_hero_subtitle', 'Please , type youre subtitle');
            $hero_button_link = get_theme_mod('set_hero_button_link', '#');
            $hero_button_text = get_theme_mod('set_hero_button_text', 'Learn More');
            $hero_height = get_theme_mod('set_hero_height',800);
            $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));
             ?>
            <section class="hero">
                <section class="hero" style="bacground-image: url('<?php echo $hero_background; ?>') ">
                    <div class="overlay" style="min-height: <?php echo $hero_height; ?>">
                        <div class="container">
                            <div class="hero-items">
                                <h1><?php echo $hero_title; ?></h1>
                                <p><?php echo nl2br($hero_subtitle); ?></p>
                                <a href="<?php echo $hero_button_link; ?>">Learn More</a>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <section class="services">
                <h2><?php esc_html_e('Services', 'wp-devs') ?></h2>
                <div class="container">
                    <div class="services-item">
                        <?php
                        if(is_active_sidebar('services-1')){
                            dynamic_sidebar('services-1');
                        } 
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if(is_active_sidebar('services-2')){
                            dynamic_sidebar('services-2');
                        } 
                        ?>
                    </div>
                    <div class="services-item">
                        <?php
                        if(is_active_sidebar('services-3')){
                            dynamic_sidebar('services-3');
                        } 
                        ?>
                    </div>
                </div>
            </section>
            <section class="home-blog">
                <h2><?php esc_html_e('Latest News', 'wp-devs') ?></h2>
                <div class="container">
                        <?php

                        $per_page = get_theme_mod('set_per_page', 3);
                        $category_included = get_theme_mod ('set_category_include');
                        $category_excluded = get_theme_mod ('set_category_excluded');

                        $args = array(
                            'post-type' => 'post',
                            'posts_per_page' => $per_page,
                            'category__in'  => explode( ",", $category_included), 
                            'category_not_in' =>  explode(",", $category_excluded)
                        );

                        $postlist = new WP_Query ($args);

                        if($postlist -> have_posts()):
                            while($postlist->have_posts()): $postlist->the_post();
                            get_template_part('parts/content' , 'latest-news');
                            endwhile;
                            wp_reset_postdata();
                        else: ?>
                           <p><?php esc-html_e('Nothing to be displayed', 'wp-devs') ?></p>
                        <?php endif; ?>
                    </div>
            </section>
        </main>
    </div>
</div>
<!---->
<?php get_footer(); ?>




