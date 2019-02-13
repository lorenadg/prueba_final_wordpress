<?php

/*

<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!-- style  -->

<link rel="stylesheet" href="assets/css/style.css">

*/

function register_enqueue_style() {
  /* Registrando estilos */
  wp_register_style('bootstrap', 'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css','normalize', '1.0', 'screen');
  wp_register_style('bootstrap-theme', 'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css','normalize', '1.0', 'screen');
  wp_register_style('main', get_theme_file_uri('/assets/css/style.css'),
'normalize', '1.0', 'screen');
  /* Estilos en cola */
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('bootstrap-theme');
  wp_enqueue_style('main');
}
add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );





function register_enqueue_scripts() {
  /* Registrando Scripts */
  wp_register_script('Jquery', 'https://code.jquery.com/jquery-3.3.1.min.js',null, null, true);
  wp_register_script('bootstrap', 'https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js',['Jquery'], null, true);

  /* Enqueue Scripts */
  wp_enqueue_script('Jquery');
  wp_enqueue_script('bootstrap');
  }
  add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );



  //tamaños personalizados

  function thumbnails_setup() {
    add_theme_support( 'post-thumbnails' );
  }

  function dl_image_sizes( $sizes ) {

    $add_sizes = array(
      'portfolio-home'		=> __( 'Tamaño de las imágenes del portafolio en el home' ),
      'square'				=> __( 'Tamaño personalizado para hacer cuadradas las imágenes' ),
      'post-custom-size'	=> __( 'Tamaño personalizado para la imagen destada de los post' ),
      'custom-size-blog'	=> __( 'Tamaño personalizado para la imagen destada de los post' )
    );

    return array_merge( $sizes, $add_sizes );

  }

  if ( function_exists( 'add_theme_support' ) ) {

    add_image_size( 'portfolio-home', 465, 250, true );
    add_image_size( 'square', 400, 400, true );
    add_image_size( 'post-custom-size', 800, 600, true );
    add_image_size( 'custom-size-blog', 400, 300, true );

    add_filter( 'image_size_names_choose', 'dl_image_sizes' );

  }

  add_action( 'after_setup_theme', 'thumbnails_setup' );




?>
