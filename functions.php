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
    'tours' => 'Museums Menu',
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

    // have to add filter in order for the shortcodes to work in custom HTML There is no option for text
    add_filter( 'widget_text', 'do_shortcode' );

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
            'description'   => esc_html__( 'Blog Widget.', 'site1' ),
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

        register_sidebar( 
            array(
                'name'          => esc_html__( 'Sidebar About', 'site1' ),
                'id'            => 'sidebar-about',
                'description'   => esc_html__( 'About Widget.', 'site1' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
                ) 
            );
    
    register_sidebar( 
        array(
            'name'          => esc_html__( 'Sidebar Buy', 'site1' ),
            'id'            => 'sidebar-Buy',
            'description'   => esc_html__( 'Buy Widget.', 'site1' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
            ) 
        );

        register_sidebar( 
            array(
                'name'          => esc_html__( 'Sidebar Footer Content', 'site1' ),
                'id'            => 'sidebar-footer-content',
                'description'   => esc_html__( 'Footer Content Widget.', 'site1' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
                ) 
            );
    }

    add_action( 'widgets_init', 'site1_widgets_init' );


    // Create an options page to display the list of shortcodes in WordPress
 
function diwp_display_shortcodes_admin_page() {
 
    add_options_page('All Active Shortcodes', 'Active Shortcodes', 'manage_options', 'active-shortcodes', 'diwp_display_list_of_shortcodes');
   
  }
   
  add_action('admin_menu', 'diwp_display_shortcodes_admin_page'); 
   
   
  // function to display the list of active shortcodes in WordPress
   
  function diwp_display_list_of_shortcodes(){
       
      global $shortcode_tags;
       
      $shortcodes = $shortcode_tags;
       
      // sort the shortcodes with alphabetical order
      ksort($shortcodes);
       
      echo "<h2>List of All Active Shortcodes in Your Website.</h2>";
   
      echo "<ol>";
       
      foreach ($shortcodes as $shortcode => $value) {
          echo '<li>['.$shortcode.']</li>';
      }
       
      echo "</ol>";
       
  }

//  Functions to display a list of all the shortcodes
function diwp_get_list_of_shortcodes(){
 
    // Get the array of all the shortcodes
    global $shortcode_tags;
     
    $shortcodes = $shortcode_tags;
     
    // sort the shortcodes with alphabetical order
    ksort($shortcodes);
     
    $shortcode_output = "<ul>";
     
    foreach ($shortcodes as $shortcode => $value) {
        $shortcode_output = $shortcode_output.'<li>['.$shortcode.']</li>';
    }
     
    $shortcode_output = $shortcode_output. "</ul>";
     
    return $shortcode_output;
 
}
add_shortcode('get-shortcode-list', 'diwp_get_list_of_shortcodes');

function covid_disclaimer() {
    return '<small> Disclaimer: All tickets are non-refundable. Please ensure that you have chosen the proper selection</small>';
}

add_shortcode('disclaimer', 'covid_disclaimer');

function specials() {
    if(isset($_GET['today'])) {
        $today = $_GET['today'];
    } else {
        $today = date('l');
    }
    
    switch($today) {
        
        case 'Sunday':
        $content = "Unfortunately, everyone is resting. Please join us Tuesday-Saturtday <a href=''>here</a>";
        break;
    
        case 'Monday':
        $content = "Unfortunately, everyone is resting. Please join us Tuesday-Saturtday <a href=''>here</a>";
        break;
    
        case 'Tuesday':
        $content = "Admit for the price of 2, click: <a href='#'>here</a>";
        break;
    
        case 'Wednesday':
        $content = "TBD, click <a href=''>here</a>";
        break;
    
        case 'Thursday':
        $content = "Art Walk Day, all admission free after 4pm, see details <a href=''>here</a>";
        break;
    
        
        case 'Friday':
        $content = "TGIF,, everything is special today, click <a href=''>here</a>";
        break;
    
        case 'Saturday':
        $content = "Cocktails as art!, click <a href=''>here</a>";
        break;
    }
    
    return $content;
    }
    
    add_shortcode('today_specials', 'specials');

function today_date() {
    return date ("l\, F jS Y ");
}

add_shortcode('current_date', 'today_date');

function year() {
    return date('Y');
}

add_shortcode('current_year' , 'year' );

remove_filter('the_content' , 'wp_autop');