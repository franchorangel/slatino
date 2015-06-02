<?php
add_action('init', 'nosotros_solar');
function nosotros_solar() {
  
  $labels = array( 'name' => __('Nosotros'),);

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
  );
  register_post_type('nosotros', $args);
}

add_action('init', 'servicios_solar');
function servicios_solar() {
  
  $labels = array( 'name' => __('Servicios'),);

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('category'),
  );
  register_post_type('servicios', $args);
}

add_action('init', 'noticias_solar');
function noticias_solar() {
  
  $labels = array( 'name' => __('Noticias'),);

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'taxonomies' => array('category'),
  );
  register_post_type('noticias', $args);
}

function custom_excerpt_length($length){
 return 15;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);
?>
