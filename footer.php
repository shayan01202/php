</main>
<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-widget">
        <h3>Contact Us</h3>
        <p>123 Shop Street<br>Your City, ST 12345</p>
        <p>Phone: (123) 456-7890</p>
      </div>
      <div class="footer-widget">
        <h3>Hours</h3>
        <p>Mon-Fri: 9am-7pm<br>Sat: 10am-5pm<br>Sun: Closed</p>
      </div>
      <div class="footer-widget">
        <h3>Quick Links</h3>
        <?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false)); ?>
      </div>
    </div>
    <div class="copyright">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
