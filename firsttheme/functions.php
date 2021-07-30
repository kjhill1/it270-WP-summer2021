<?php


function my_excerpt_length($length){
    return 35;
}

add_filter('excerpt_length', 'my_excerpt_length', 999);

set_post_thumbnail_size(150, 150);

add_theme_support('post-thumbnails') ;

  // register our navs**8888
register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer' => 'Footer Menu'
    ));

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );

    // this will let WP know that we are linking iokn atsute-js

    function my_theme_scripts() {
        wp_enqueue_script( 'astuteo', get_template_directory_uri().'/js/astuteo.js', '1.0.0', false );
        }
        add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

    //    world of widgets!!!
    // must reg widgets to appear on dashboard in functions.php

    // KEEP FOR FINAL when have to reinstal

    function site1_widgets_init() {
        register_sidebar( 
        array(
            'name'          => esc_html__( 'Sidebar Blog', 'site1' ),
            'id'            => 'sidebar-blog',
            'description'   => esc_html__( 'Sidebar Blog Widget.', 'site1' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            ) 
        );
  

    register_sidebar( 
        array(
            'name'          => esc_html__( 'Sidebar Museums', 'site1' ),
            'id'            => 'sidebar-museums',
            'description'   => esc_html__( 'Museums Widget.', 'site1' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            ) 
        );
    }
    add_action( 'widgets_init', 'site1_widgets_init' );