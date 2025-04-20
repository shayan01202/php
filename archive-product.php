<?php get_header(); ?>
<div class="shop-container container">
  <div class="shop-header">
    <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
    <?php woocommerce_result_count(); ?>
  </div>
  <div class="shop-grid">
    <aside class="shop-sidebar">
      <?php dynamic_sidebar('shop-sidebar'); ?>
    </aside>
    <main class="shop-main">
      <?php if (woocommerce_product_loop()) {
        woocommerce_product_loop_start();
        if (wc_get_loop_prop('total')) {
          while (have_posts()) {
            the_post();
            wc_get_template_part('content', 'product');
          }
        }
        woocommerce_product_loop_end();
        woocommerce_pagination();
      } else {
        do_action('woocommerce_no_products_found');
      } ?>
    </main>
  </div>
</div>
<?php get_footer(); ?>