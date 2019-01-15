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
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="navbar-header">
      <a id="home" class="navbar-brand" href="<?php echo site_url('/home') ?>"><?php echo get_bloginfo('name') ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="container">
        <div class="row">
            <form class="col-md-5 col-sm-12" id="search-group">
                <div class="form-group container">
                  <div class="row">
                    <div class="lg-col-6" id="search_field">
                        <?php 
                        get_product_search_form(); ?>  
                    </div>
                    <div class="lg-col-6">
                      <button id="search-button" type="submit" class="btn lg-col-6">Submit</button>
                    </div>
                  </div>
              </div>
            </form>
            <form class="menu col-md-5 col-sm-12" id="navigation_menu">
              <?php
              wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation',
                'menu_class' => 'navbar-nav',
              ));
              ?>
          </form>
        </div>
      </div>  
    </div>   
  </div>
</nav>
</header>