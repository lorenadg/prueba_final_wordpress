<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-
scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>

  <!-- logo-->

  <img class="logo" src=<?php echo get_theme_file_uri('/assets/img/marca/logo.png'); ?>" alt="...">

  <!-- fin logo-->

  <!-- carrusel  -->

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo get_theme_file_uri('/assets/img/sitio/pizza.jpg'); ?>" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_theme_file_uri('/assets/img/sitio/il_fonti_di_modena.jpg'); ?>" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_theme_file_uri('/assets/img/sitio/pasta.jpg'); ?>" alt="...">
        <div class="carousel-caption">
        </div>
      </div>
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- fin carrusel -->
