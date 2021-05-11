<?php 
function royal_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
 
}
add_action('after_setup_theme', 'royal_theme_support');
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
       register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'slatki' ),
    ) );
}
add_action( 'after_setup_theme', 'register_navwalker' );


function royal_theme_styles() {
    wp_enqueue_style('owl_css', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl_theme_css', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'royal_theme_styles');

function royal_theme_js() {
    wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'royal_theme_js');

function set_excerpt_length() {
    return 15;
}
add_filter('excerpt_length', 'set_excerpt_length');

function widgeti() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        register_sidebar(array(
        'name' => 'Footer 1',
        'id' => 'footer-1',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
          register_sidebar(array(
        'name' => 'Footer 2',
        'id' => 'footer-2',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
          register_sidebar(array(
        'name' => 'Footer 3',
        'id' => 'footer-3',
        'before_widget' => '<div class="col-md-4">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'widgeti');


