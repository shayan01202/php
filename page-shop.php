<?php /* Template Name: Shop Homepage */ ?>
<?php get_header(); ?>
<section class="hero-section">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <p>Welcome to our local shop!</p>
  </div>
</section>
<section class="featured-products">
  <div class="container">
    <h2>Featured Products</h2>
    <?php echo do_shortcode('[products limit="4" columns="4" visibility="featured"]'); ?>
  </div>
</section>
<section class="about-section">
  <div class="container">
    <h2>Our Story</h2>
    <?php the_content(); ?>
  </div>
</section>
<?php get_footer(); ?>