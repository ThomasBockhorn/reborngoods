<footer id="footer" class="jumbotron">
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="name-address col-lg-4">
                <h1><?php bloginfo('name'); ?></h1>
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