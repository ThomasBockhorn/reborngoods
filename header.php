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
  <a id="home" class="navbar-brand" href="<?php echo site_url('/home') ?>"><?php echo get_bloginfo('name') ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
    </button>
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
            <form class="menu col-md-6 col-sm-12">
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