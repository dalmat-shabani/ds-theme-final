<?php get_header(); ?>


<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main"> 
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1><?php esc_html_e('Page Not found 404', 'wp-devs'); ?></h1>
                        <p><?php escc_html_e('Unfortunatly, the page u tried to reach does not exist on this site' , 'wp-devs') ?></p>
                    </header>
                    <div class="error">
                        <p><?php esc_html_e('how bout doing a search' , 'wp-devs') ?></p>
                        <?php get_search_form(); ?>
                        <?php
                        the_widget(
                            'WP_Widget_Recent-Posts',
                            array(
                                'title' => esc_html_e('how bout doing a search', 'wp=devs'),
                                'number' => 3
                            )
                            ); ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<?php get_footer(); ?>