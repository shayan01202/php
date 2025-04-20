<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <div class="header-grid">
      <div class="logo">
        <a href="<?php echo home_url('/'); ?>">
          <?php if (has_custom_logo()): ?>
            <?php the_custom_logo(); ?>
          <?php else: ?>
            <h1><?php bloginfo('name'); ?></h1>
          <?php endif; ?>
        </a>
      </div>
      <nav class="main-navigation">
        <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'primary-menu')); ?>
      </nav>
      <div class="header-actions">
        <?php if (class_exists('WooCommerce')): ?>
          <a href="<?php echo wc_get_cart_url(); ?>" class="cart-link">
            Cart (<span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>)
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>

<main class="site-content">
