<?php get_header(); ?>
<div class="jumbotron container text-center" id="landing_page_jumbotron">
  <h1 class="display-4" id="heading">Reborn Goods</h1>
  <p class="lead" id="heading">Vintage Clothing and Accessories</p>
  <?php
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => 3,
    'orderby' => 'rand'
  ); ?>
<div class="imageSet">
<?php $loop = new WP_Query($args);
while ($loop->have_posts()) : $loop->the_post();
global $product; ?>
    <div class="jumboImage" data-profile="<?php echo $loop->post->ID; ?>">
        <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID)); ?>
        <?php if ($featured_image) { ?>
        <img class="img-responsive" id="featured-image" src="<?php echo $featured_image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
        <?php 
      } ?>
    </div>
<?php endwhile; ?>
</div>
</div>
<?php get_footer(); ?>