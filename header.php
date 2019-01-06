<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body <?php body_class(); ?>>
<header>
<!--Header for reborngoods theme-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a id="home" class="navbar-brand" href="<?php echo site_url('/home') ?>"><?php echo get_bloginfo('name') ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <form class="navbar-form navbar-right container">
          <div class="row">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
           </div>
        </form>
      <form class="menu">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'headerMenuLocation',
          'menu_class' => 'navbar-nav',
        ));
        ?>
      </form>
    </div>   
  </div>
</nav>
</header>