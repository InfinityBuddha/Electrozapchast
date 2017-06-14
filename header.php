<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Электрозапчасть - ремонт и продажа электроинструмента</title>

    <?php wp_head(); ?>
	  <link rel="stylesheet" href="css/swiper.min.css">
    <script src="https://api-maps.yandex.ru/2.1/?lang=RU&scroll=false" type="text/javascript"></script>
  </head>
  <body>
    <header class="page-header">
      <div class="page-header__container">
        <div class="logo">
          <a class="logo__link" href="<?php echo home_url(); ?>"><span>Электро</span>запчасть</a>
          <div class="logo__phone-number">8 (4842) 700-633</div>
        </div>
        <nav class="main-nav">
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'primary',
            'container'       => ul,
            'menu_class'      => 'main-nav__list'
          ));
          ?>

          <!--
          <ul class="main-nav__list">
            <li class="main-nav__item">
              <a class="main-nav__link" href="catalog.html">Наши услуги
                <svg class="arrow-down-icon" width="10px" height="7px" viewBox="0 0 10 7" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <polygon id="Shape" points="8.21428571 0.0178571429 5 3.23214286 1.78571429 0.0178571429 0.0178571429 1.78571429 5 6.76785714 9.98214286 1.78571429"></polygon>
                </svg>
              </a>
            </li>
            <li class="main-nav__item">
              <a class="main-nav__link" href="form.html">Контакты</a>
            </li>
          </ul>
        !-->
        </nav>
      </div>
    </header>
