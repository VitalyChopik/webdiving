<footer class="footer">
  <div class="footer__container">
    <a href="<?php echo get_home_url(); ?>" class="logo footer__logo">
    <?php
      $logo_img = '';
      if ( $custom_logo_id = get_theme_mod( 'custom_logo' ) ) {
        $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
          'class'    => 'custom-logo',
          'itemprop' => 'logo',
        ) );
      }
      echo $logo_img;
      ?>
    </a>
    <nav class="menu footer__menu">

            <?php
            wp_nav_menu( [
              'theme_location' => 'footer_menu',
              'menu'            => 'footer_menu',
              'container' => false,
              'menu_class'      => 'menu__list',
              'echo'            => true,
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => new MainMenu(),
            ] );
            ?>
      <a href="#" class="btn footer__btn">Консультация</a>
    </nav>
  </div>
</footer>
</div>
<?php wp_footer();?>
</body>

</html>