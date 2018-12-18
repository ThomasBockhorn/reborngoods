<?php
//This will add the bootstrap needed for the theme
function bootstrap_script()
{
    wp_enqueue_style('bootstrap_css', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'));
    wp_enqueue_script('popperjs', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('popper'));
    wp_enqueue_script('bootstrap_js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'));

}
add_action('wp_enqueue_scripts', 'bootstrap_script');

//This will add the custom css
function custom_css()
{
    wp_enqueue_style('custom_css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_css');

//This will add dynamic menu
function theme_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
}
add_action('after_setup_theme', 'theme_features');

//This allows the page to support woocommerce
function woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');
?>