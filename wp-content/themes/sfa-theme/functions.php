<?php
  // Register Nav Walker class_alias
  require_once('wp_bootstrap_navwalker.php');
  function add_jquery() {
    if(!is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4');
    wp_enqueue_script( 'jquery' );
    }
 }
 add_action('init', 'add_jquery');

 function theme_scripts(){
   wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('owl-carousel', get_template_directory_uri().'/owl-carousel/assets/owl.carousel.css');
  wp_enqueue_style('carousel', get_template_directory_uri().'/css/carousel.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/custom/owl.carousel.min.js');
  wp_enqueue_script('carousel', get_template_directory_uri().'/js/custom/carousel.js');
   
   
 }
add_action('wp_enqueue_scripts', 'theme_scripts');
  // Theme Support
  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');

    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));

    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
  }

  add_action('after_setup_theme','wpb_theme_setup');

// Excerpt Length Control
function set_excerpt_length(){
  return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget Locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));

  register_sidebar(array(
    'name'  => 'Box1',
    'id'    => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'  => 'Box2',
    'id'    => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'  => 'Box3',
    'id'    => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'wpb_init_widgets');

// Customizer File
require get_template_directory(). '/inc/customizer.php';
