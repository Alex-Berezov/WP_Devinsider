</main>

<footer class="footer">
    <div class="container">
      <div class="footerContent">
        <?php the_custom_logo(); ?>
        <nav class="footerNav">
          <a href="<?php echo get_home_url() . '/#about' ?>" class="footerNavItem smallText">о нас</a>
          <a href="<?php echo get_home_url() . '/#services' ?>" class="footerNavItem smallText">услуги</a>
          <a href="<?php echo get_home_url() . '/#services' ?>" class="footerNavItem smallText">цены</a>
          <a href="<?php echo get_home_url() . '/#ourWork' ?>" class="footerNavItem smallText">примеры работ</a>
          <a href="<?php echo get_home_url() . '/#howWeWork' ?>" class="footerNavItem smallText">как мы работаем</a>
        </nav>
      </div>
    </div>
  </footer>

  <?php wp_footer() ?>
</body>
</html>