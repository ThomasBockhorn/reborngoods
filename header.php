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
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'headerMenuLocation',
      'menu_class' => 'navbar-nav',
      'container' => ''
    ));
    ?>
    </div>
  </div>
</nav>

</header>