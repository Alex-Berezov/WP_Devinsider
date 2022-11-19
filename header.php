<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head() ?>
</head>
<body>
  
  <header class="header">
    <div class="container">
      <div class="desktopMenu">
        <?php the_custom_logo(); ?>
        <nav class="nav">
          <a href="<?php echo get_home_url() . '/#about' ?>" class="navItems H5">о нас</a>
          <a href="<?php echo get_home_url() . '/#services' ?>" class="navItems H5">услуги</a>
          <a href="<?php echo get_home_url() . '/#services' ?>" class="navItems H5">цены</a>
          <a href="<?php echo get_home_url() . '/#ourWork' ?>" class="navItems H5">примеры работ</a>
          <a href="<?php echo get_home_url() . '/#howWeWork' ?>" class="navItems H5">как мы работаем</a>
        </nav>
        <a href="<?php echo get_home_url() . '/#contacts' ?>" class="headerGetInTouch H5">Оставить заявку</a>
      </div>
    </div>
    
    <div class="container-full">
      <div class="mobileMenu">
        <?php the_custom_logo(); ?>

        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>

        <nav class="menu__box">
          <a href="<?php echo get_home_url() . '/#about' ?>" class="menu__item H5">о нас</a>
          <a href="<?php echo get_home_url() . '/#services' ?>" class="menu__item H5">услуги</a>
          <a href="<?php echo get_home_url() . '/#services' ?>" class="menu__item H5">цены</a>
          <a href="<?php echo get_home_url() . '/#ourWork' ?>" class="menu__item H5">примеры работ</a>
          <a href="<?php echo get_home_url() . '/#howWeWork' ?>" class="menu__item H5">как мы работаем</a>
          <div class="wrapperButton">
            <a href="<?php echo get_home_url() . '/#contacts' ?>" class="headerGetInTouch H5">Оставить заявку</a>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <main>