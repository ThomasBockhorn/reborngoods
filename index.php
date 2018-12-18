<?php get_header(); ?>
<div id="main" class="row">
    <div id="content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(__('(more...)')); ?></p>
            </div>
            <?php endwhile;
            else : ?>
        <p><?php _e('Sorry, no posts match your criteria.'); ?></p>
        <?php endif; ?>
        </div>   
    </div>
</div>
<?php get_footer(); ?>
    