<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


function load_parent_stylesheet() {
  wp_enqueue_style( 'spmedia_style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script('spmedia_script', '/wp-content/themes/spmedia/js/script.js', array('jquery'));
  wp_register_script( 'spmedia_script', get_stylesheet_directory_uri() . '/script.js');
}
add_action( 'wp_enqueue_scripts', 'load_parent_stylesheet' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function widgets_init() {
  register_sidebar( array(
    'name' => __( 'Nawigacja', 'custom-nav' ),
    'id' => 'custom-navbar',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
}
add_action( 'widgets_init', 'widgets_init' );

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'Nawigacja' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
?>