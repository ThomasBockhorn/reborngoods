<?php
//This will add the bootstrap needed for the theme
function bootstrap_script()
{
    wp_enqueue_style('bootstrap_css', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');;
    wp_enqueue_script('popperjs', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('popper'));
    wp_enqueue_script('bootstrap_js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'bootstrap_script');

function my_init()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, '1.11.0', true);
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'my_init');  

//This will get font awesome
function font_awesome()
{
    wp_enqueue_style('font_awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css');
}
add_action('wp_enqueue_scripts', 'font_awesome');

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
    register_nav_menu('footerMenu', 'Footer Menu');
}
add_action('after_setup_theme', 'theme_features');

//This allows the page to support woocommerce
function woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');

/*This function will add HTML5 features*/
add_theme_support('html5', array(
    'comment-list',
    'comment-form',
    'search-form'
));

/*Adding a sales badge*/
function change_on_sale_badge()
{
    $sale_badge = '<span class="on-sale">Reduced!</span>';
    return $sale_badge;
};
add_filter('woocommerce_sale_flash', 'change_on_sale_badge');

/*Filter WooCommerce  Search Field*/
function me_custom_product_searchform($form)
{
    $form = '<form role="search" method="get" id="searchform" action="' . esc_url(home_url('/')) . '">
            <div>
                <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __('Search products...', 'woocommerce') . '" />                           
                <input type="hidden" name="post_type" value="product" />
            </div>
        </form>';
    return $form;
}
add_filter('get_product_search_form', 'me_custom_product_searchform');

/*Sold out badge */
function sold_out_badge()
{
    global $product;
    if (!$product->is_in_stock()) {
        echo '<span class="now_sold">Sold Out</span>';
    }
};
add_action('woocommerce_before_shop_loop_item_title', 'sold_out_badge');

/* Add classes to form fields*/
function addBootstrapToCheckoutFields($fields)
{
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            $field['class'][] = 'form-group'; 

            // add form-control to the actual input
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}
add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields');

/*This gets rid of shipping company name, and order comments*/
function updated_shipping_form($fields)
{
    unset($fields['order']['order_comments']);
    unset($fields['billing']['billing_company']);
    unset($fields['shipping']['shipping_company']);

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'updated_shipping_form');

/*This function displays google fonts */
function google_fonts()
{
    wp_enqueue_style("googlefonts", "//fonts.googleapis.com/css?family=Old+Standard+TT");
}
add_action('wp_enqueue_scripts', "google_fonts");

/*This function modifies the my account navigation bar*/
function modify_my_account_navigation($menu_links)
{
    unset($menu_links['downloads']);
    unset($menu_links['dashboard']);
    return $menu_links;
}
add_filter('woocommerce_account_menu_items', 'modify_my_account_navigation');
?>

