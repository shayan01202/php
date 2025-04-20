<?php
function local_shop_setup() {
  add_theme_support('title-tag');
  add_theme_support('woocommerce');
  add_theme_support('post-thumbnails');
  
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'localshop'),
    'footer' => __('Footer Menu', 'localshop')
  ));
}
add_action('after_setup_theme', 'local_shop_setup');

function local_shop_scripts() {
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap');
  wp_enqueue_style('local-shop-style', get_stylesheet_uri());
  wp_enqueue_script('local-shop-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);

  if (class_exists('WooCommerce')) {
    wp_enqueue_style('local-shop-woocommerce', get_template_directory_uri() . '/css/woocommerce.css');
  }
}
add_action('wp_enqueue_scripts', 'local_shop_scripts');

require get_template_directory() . '/inc/woocommerce-setup.php';
