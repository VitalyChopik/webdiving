<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head();?>
  <meta name="yandex-verification" content="fbece906592fa661" />
  <meta name="google-site-verification" content="yU7kQS4FQRayJkvOrdFMVOp1QvyoBYQ6-WH5w-KASRI" />
</head>

<body>
  <div class="wrapper">
    <header class="header">
  <div class="header__container">
    <a href="<?php echo get_home_url(); ?>" class="logo header__logo">
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
    <nav class="menu header__menu">
          <?php
            wp_nav_menu( [
              'theme_location' => 'main_menu',
              'menu'            => 'main_menu',
              'container' => false,
              'menu_class'      => 'menu__list',
              'echo'            => true,
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => new MainMenu(),
            ] );
            ?>
      <a href="#" class="btn header__btn" data-type="offerPopup">Консультация</a>
    </nav>
    <button class="header__burger icon-menu">
  <span></span>
</button>
  </div>
</header>