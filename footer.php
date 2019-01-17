<footer id="footer" class="jumbotron">
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="name-address col-lg-4">
                <h1><?php bloginfo(); ?></h1>
                <p><?php 
                //Split the country and state
                    $split_country = explode(":", get_option('woocommerce_default_country'));

                //Country and state separated
                    $store_country = $split_country[0];
                    $store_state = $split_country[1];

                    echo get_option('woocommerce_store_address') . "<br />";
                    echo (get_option('woocommerce_store_address_2')) ? get_option('woocommerce_store_address_2') . "<br />" : '';
                    echo get_option('woocommerce_store_city') . ', ' . $store_state . ' ' . get_option('woocommerce_store_postcode') . "<br />";
                    echo $store_country . "<br />";
                    echo get_option('admin_email');
                    ?></p>
            </div>
            <div class="footer-menu col-lg-4">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footerMenu',
                'menu_class' => 'navbar-nav',
            ));
            ?>
            </div>
            <div class="social-media col-lg-4">
                <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>