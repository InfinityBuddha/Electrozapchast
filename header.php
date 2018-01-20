<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Электрозапчасть - ремонт и продажа электроинструмента</title>

    <?php wp_head(); ?>
	  <script async src="https://api-maps.yandex.ru/2.1/?lang=RU&scroll=false" type="text/javascript"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter42859074 = new Ya.Metrika({
                        id:42859074,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/42859074" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
  </head>
  <body <?php body_class( 'my-class' ); ?>>
    <header class="page-header">
      <div class="page-header__container">
        <div class="logo">
          <a class="logo__link" href="<?php echo home_url(); ?>"><span>Электро</span>запчасть</a>
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
        <?php echo do_shortcode( '[aws_search_form]' ); ?>
        <div class="logo__phone-numbers">
          <div class="logo__phone-number">8 (4842) 700-633</div>
          <div class="logo__phone-number">8 (4842) 400-250</div>
        </div>
      </div>
    </header>
