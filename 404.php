<?php get_header(); ?>


<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main"> 
            <div class="container">
                <div class="error-404">
                    <header>
                        <h1>Page Not found 404</h1>
                        <p>Unfortunatly, the page u tried to reach does not exist on this site</p>
                    </header>
                    <div class="error">
                        <p>how bout doing a search</p>
                        <?php get_search_form(); ?>
                        <?php
                        the_widget(
                            'WP_Widget_Recent-Posts',
                            array(
                                'title' => 'Latest posts',
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