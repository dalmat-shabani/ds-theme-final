<?php

require get_template_directory() . '/inc/customizer.php';

function ds_theme_load_scripts (){
    wp_enqueue_style( 'dstheme-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' ); 
    wp_enqueue_style('google-fonts', ' https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null); 
    wp_enqueue_script('dropdown', get_template_directory_uri().'js/dropdown.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'ds_theme_load_scripts');

register_nav_menus(
    array(
        'wp_devs_main_menu' => 'Main Menu',
        'wp_devs_footer_menu' => 'Footer Menu'
    )
    );


function dstheme_config(){


    $textdomain = 'wp-devs' ;
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages');

    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );

    add_theme_support('custom-header',$args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width'> 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    ));

    }

add_action('after_setup_theme', 'dstheme_config', 0);

add_action('widgets_init', 'dstheme_sidebars');
function dstheme_sidebars(){
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-blog',
            'description' => 'This is the Blog Sidebar. You can add your widgets here.',
            'before_widget' => '<div class = "widget-title">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Service 1', 'wp-devs'),
            'id' => 'services-1',
            'description' => esc_html_('First service area'),
            'before_widget' => '<div class = "widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Services-2', 'wp-devs'),
            'id' => 'services-2',
            'description' => esc_html__('Second service area' , 'wp-devs'),
            'before_widget' => '<div class = "widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Services-3','wp-devs'),
            'id' => 'services-3',
            'description' => esc_html_('Third service area', 'wp-devs'),
            'before_widget' => '<div class = "widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class = "widget-title">',
            'after_title' => '</h4>'
        )
    );
} 

function use_costum_single_template($template) {
    if (is_singular() && has_category('Web Development')) {
        return get_template_directory() . '/single-costum.php';
    }
    return $template;
}
add_filter('single_template', 'use_costum_single_template');






?>