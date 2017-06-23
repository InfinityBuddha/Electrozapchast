<?php
/*
  Template Name: Home Page
*/

get_header('v2'); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
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
    <main>
      <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <div class="promo__text-group">
                  <h1 class="promo__title">Бензопила SD-MASTER 4518</h1>
                  <h3 class="promo__subtitle">5 900 р.</h3>
                  <a href="#" class="btn btn__promo" id="btn-promo">Связаться с нами</a>
                </div>
              </div>
              <div class="swiper-slide swiper-slide--2">
                <div class="promo__text-group">
                  <h1 class="promo__title">Мотоблок бензиновый ХОПЕР 900MQ</h1>
                  <h3 class="promo__subtitle">25 500 р.</h3>
                  <a href="#" class="btn btn__promo" id="btn-promo">Связаться с нами</a>
                </div>
              </div>
              <div class="swiper-slide swiper-slide--3">
                <div class="promo__text-group">
                  <h1 class="promo__title">Бензотриммер SD-MASTER GBC-043</h1>
                  <h3 class="promo__subtitle">4 800 р.</h3>
                  <a href="#" class="btn btn__promo" id="btn-promo">Связаться с нами</a>
                </div>
              </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
      </div>
      <section class="services">
        <div class="services__container">
          <h2 class="section-title" id="services">Наши услуги</h2>
          <div class="row">
            <div class="column">
              <?php
                // Get the ID of a given category
                $category_id = get_cat_ID('Ремонт бензоинструмента');

                // Get the URL of this category
                $category_link = get_category_link( $category_id );
              ?>
              <a class="services__link" href="<?php echo esc_url( $category_link ); ?>">
                <div class="card card__spacer">
                  <h3 class="card__title">Ремонт</h3>
                  <p class="card__subtitle">Бензоинструмент</p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="card__repair-icon" width="26" height="26" viewBox="0 0 26 26"><g fill="none"><g fill="#FFF"><path d="M5.7 24.5L17.5 12.6C19 12.9 20.6 12.7 22.1 11.9 24.1 10.7 25.3 8.5 25.2 6.2 25.2 6 25 5.9 24.8 6L21.5 7.9 18.9 6.4 18.9 3.3 22.2 1.4C22.4 1.3 22.4 1 22.2 0.9 20.3-0.2 17.8-0.4 15.7 0.9 13.3 2.3 12.2 5.2 12.8 7.8L1 19.7C-0.3 21-0.3 23.1 1 24.5 2.3 25.8 4.4 25.8 5.7 24.5L5.7 24.5Z"/></g></g></svg>
                  <svg class="card__gasoline-icon" width="53px" height="70px" viewBox="0 0 53 70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="Desktop" transform="translate(-432.000000, -1064.000000)" fill="#FFFFFF">
                              <g id="Наши-услуги" transform="translate(50.000000, 826.000000)">
                                  <g id="Ремонт-бензоинструмент" transform="translate(0.000000, 73.000000)">
                                      <g id="Gasoline" transform="translate(409.028652, 199.707633) rotate(-42.000000) translate(-409.028652, -199.707633) translate(366.528652, 156.707633)">
                                          <path d="M51.1409381,18.0986771 L45.8965389,10.0386771 L45.8965389,10.0386771 L45.7811621,9.89867706 L45.6972517,9.80867706 L45.5713861,9.70867706 L45.4664981,9.61867706 L45.2881886,9.55867706 L45.162323,9.48867706 L45.0259686,9.48867706 L44.8791254,9.48867706 L44.7532599,9.48867706 L44.5644615,9.48867706 L21.1639523,9.48867706 C18.5571908,9.48867706 16.4439931,11.5033957 16.4439931,13.9886771 L16.4439931,72.7686771 C16.4439931,75.2539584 18.5571908,77.2686771 21.1639523,77.2686771 L62.070266,77.2686771 C64.6770275,77.2686771 66.7902252,75.2539584 66.7902252,72.7686771 L66.7902252,22.6386771 C66.7899692,20.8061904 65.6242363,19.1568776 63.8428729,18.4686771 L65.2169055,15.5386771 L65.709879,15.7486771 C66.2276563,16.0088171 66.854098,15.9734391 67.3360422,15.6568403 C67.8179864,15.3402414 68.075768,14.7947554 68.0052104,14.2408277 C67.9346528,13.6869 67.5474193,13.2160948 67.0000012,13.0186771 L57.1300419,8.76867706 C56.6122647,8.50853699 55.985823,8.54391499 55.5038787,8.86051385 C55.0219345,9.17711271 54.7641529,9.72259876 54.8347105,10.2765264 C54.9052681,10.8304541 55.2925017,11.3012593 55.8399197,11.4986771 L56.3328933,11.7086771 L53.3016305,18.0986771 L51.1409381,18.0986771 Z M43.651936,12.3286771 L47.3859482,18.0986771 L37.7152761,18.0986771 C37.1719932,18.0988413 36.6676019,17.8299997 36.3831988,17.3886771 L33.0687385,12.3286771 L43.651936,12.3286771 Z M59.206824,12.9086771 L62.3534635,14.2686771 L60.5493902,18.0986771 L56.7524452,18.0986771 L59.206824,12.9086771 Z M54.2770888,21.0986771 L62.070266,21.0986771 C62.9391865,21.0986771 63.6435857,21.7702499 63.6435857,22.5986771 L63.6435857,72.7686771 C63.6435857,73.5971042 62.9391865,74.2686771 62.070266,74.2686771 L21.1639523,74.2686771 C20.2950318,74.2686771 19.5906326,73.5971042 19.5906326,72.7686771 L19.5906326,13.8686771 C19.5906326,13.0402499 20.2950318,12.3686771 21.1639523,12.3686771 L28.5061112,12.3686771 C29.0493941,12.3685128 29.5537854,12.6373544 29.8381886,13.0786771 L33.7505104,19.0286771 L33.7505104,19.0286771 C34.612927,20.3206278 36.1090224,21.1017376 37.7152761,21.0986771 L54.2770888,21.0986771 L54.2770888,21.0986771 Z" id="Shape" transform="translate(42.230354, 42.932184) rotate(42.000000) translate(-42.230354, -42.932184) "></path>
                                          <path d="M24.7409413,28.8753171 C24.1210328,28.3245994 23.1550146,28.3408494 22.5558691,28.9120735 C21.9567236,29.4832977 21.9396793,30.4042976 22.517316,30.9953171 L29.5867661,37.7053171 L29.5867661,54.8453171 L22.6956256,61.4153171 C22.2747034,61.7892583 22.1014369,62.3524282 22.2437985,62.8838949 C22.3861601,63.4153617 22.8214444,63.8303609 23.3788892,63.9660882 C23.9363339,64.1018155 24.5270315,63.9366235 24.9192508,63.5353171 L32.2614097,56.5353171 L45.3724077,56.5353171 L52.7145665,63.5353171 C53.334475,64.0860348 54.3004932,64.0697849 54.8996387,63.4985607 C55.4987842,62.9273366 55.5158285,62.0063366 54.9381918,61.4153171 L47.4177234,54.2353171 L47.4177234,38.0453171 L54.7598822,31.0453171 C55.2168538,30.4666041 55.1747563,29.6592194 54.6598374,29.1265683 C54.1449185,28.5939172 53.304306,28.488194 52.6621225,28.8753171 L45.3199637,35.8753171 L32.1250553,35.8753171 L24.7409413,28.8753171 Z M32.6914504,38.8753171 L44.2710838,38.8753171 L44.2710838,53.4953171 L32.7334056,53.4953171 L32.6914504,38.8753171 Z" id="Shape" transform="translate(38.727754, 46.242753) rotate(42.000000) translate(-38.727754, -46.242753) "></path>
                                      </g>
                                  </g>
                              </g>
                          </g>
                      </g>
                  </svg>
                </div>
              </a>
              <?php
                // Get the ID of a given category
                $category_id = get_cat_ID('Ремонт бензоинструмента');

                // Get the URL of this category
                $category_link = get_category_link( $category_id );
              ?>
              <a class="services__link" href="<?php echo esc_url( $category_link ); ?>">
                <div class="card card__spacer">
                  <h3 class="card__title">Ремонт</h3>
                  <p class="card__subtitle">Электроинструмент</p>
                  <svg xmlns="http://www.w3.org/2000/svg" class="card__repair-icon" width="26" height="26" viewBox="0 0 26 26"><g fill="none"><g fill="#FFF"><path d="M5.7 24.5L17.5 12.6C19 12.9 20.6 12.7 22.1 11.9 24.1 10.7 25.3 8.5 25.2 6.2 25.2 6 25 5.9 24.8 6L21.5 7.9 18.9 6.4 18.9 3.3 22.2 1.4C22.4 1.3 22.4 1 22.2 0.9 20.3-0.2 17.8-0.4 15.7 0.9 13.3 2.3 12.2 5.2 12.8 7.8L1 19.7C-0.3 21-0.3 23.1 1 24.5 2.3 25.8 4.4 25.8 5.7 24.5L5.7 24.5Z"/></g></g></svg>
                  <svg class="card__electro-icon" width="57px" height="34px" viewBox="0 0 57 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Desktop" transform="translate(-508.000000, -1345.000000)" fill="#FFFFFF">
                            <g id="Наши-услуги" transform="translate(50.000000, 826.000000)">
                                <g id="Ремонт-электроинструмент" transform="translate(0.000000, 328.000000)">
                                    <g id="plug-icon" transform="translate(487.000000, 208.000000) rotate(-180.000000) translate(-487.000000, -208.000000) translate(458.000000, 190.000000)">
                                        <g id="Group">
                                            <g transform="translate(0.000000, 0.527083)" id="Shape">
                                              <path d="M20.7272724,-11.3475978 C20.190261,-11.3423243 19.6777681,-11.1324986 19.3039715,-10.7648677 C18.9301749,-10.3972367 18.7261279,-9.90234155 18.7372899,-9.39043941 L18.7372899,-2.36064586 L14.0451207,-2.36064586 C13.9753442,-2.36411506 13.9054254,-2.36411506 13.8356489,-2.36064586 C12.8076086,-2.25791536 12.028663,-1.42891603 12.0341911,-0.443429441 L12.0341911,10.4207969 C12.0341911,17.4685484 18.048139,23.2022397 25.4403887,23.2022397 L26.7810085,23.2022397 L26.7810085,44.2916204 C26.7707522,44.9830375 27.1517743,45.626159 27.7781739,45.9747211 C28.4045736,46.3232833 29.1793027,46.3232833 29.8057024,45.9747211 C30.432102,45.626159 30.8131241,44.9830375 30.8028678,44.2916204 L30.8028678,23.2022397 L32.1434876,23.2022397 C39.5357373,23.2022397 45.5496852,17.4685484 45.5496852,10.4207969 L45.5496852,-0.443429441 C45.5495742,-1.50223498 44.6493153,-2.36054 43.5387556,-2.36064586 L38.8465864,-2.36064586 L38.8465864,-9.39043941 C38.8579007,-9.90926862 38.6481528,-10.4103138 38.2652483,-10.7791377 C37.8823439,-11.1479616 37.3589865,-11.3530632 36.8147096,-11.3475978 C36.2776982,-11.3423243 35.7652053,-11.1324986 35.3914087,-10.7648677 C35.0176121,-10.3972367 34.8135651,-9.90234155 34.8247271,-9.39043941 L34.8247271,-2.36064586 L22.7591492,-2.36064586 L22.7591492,-9.39043941 C22.7704636,-9.90926862 22.5607156,-10.4103138 22.1778111,-10.7791377 C21.7949067,-11.1479616 21.2715493,-11.3530632 20.7272724,-11.3475978 L20.7272724,-11.3475978 Z M16.0560504,1.47378698 L41.5278259,1.47378698 L41.5278259,10.4207969 C41.5278259,15.4106019 37.3771947,19.3678069 32.1434876,19.3678069 L25.4403887,19.3678069 C20.2066816,19.3678069 16.0560504,15.4106019 16.0560504,10.4207969 L16.0560504,1.47378698 L16.0560504,1.47378698 Z" transform="translate(28.791924, 17.444219) rotate(-270.000000) translate(-28.791924, -17.444219) "></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                  </svg>
                </div>
              </a>
            </div>
            <div class="column">
              <div class="card card__spacer card__tools">
                <h3 class="card__title">Продажа инструмента</h3>
                <div class="card__subtitle">Десятки производителей</div>
              <?php
                // Get the ID of a given category
                $category_id = get_cat_ID('Продажа инструмента');

                // Get the URL of this category
                $category_link = get_category_link( $category_id );
              ?>
                <a class="btn btn__tools" href="<?php echo esc_url( $category_link ); ?>">
                Выбрать бренд</a>
<svg class="card__sell-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><title>  Shape</title><desc>  Created with Sketch.</desc><g fill="none"><g fill="#FFF"><path d="M9.2 0C8.2 0 7.5 0.8 7.5 1.7 7.5 2 7.6 2.4 7.8 2.6L6 6.5 0.8 6.5C0.4 6.5 0 6.9 0 7.3L0 11.8C0 12.2 0.4 12.6 0.8 12.6L1.3 12.6 3.4 24C3.4 24.4 3.8 24.7 4.2 24.7L20.8 24.7C21.2 24.7 21.6 24.4 21.6 24L23.7 12.6 24.2 12.6C24.6 12.6 25 12.2 25 11.8L25 7.3C25 6.9 24.6 6.5 24.2 6.5L19 6.5 17.2 2.6C17.4 2.4 17.5 2 17.5 1.7 17.5 0.8 16.8 0 15.8 0 14.9 0 14.2 0.8 14.2 1.7 14.2 2.6 14.8 3.3 15.7 3.4L17.1 6.5 7.9 6.5 9.3 3.4C10.2 3.3 10.8 2.6 10.8 1.7 10.8 0.8 10.1 0 9.2 0L9.2 0ZM1.7 8.1L23.3 8.1 23.3 11 1.7 11 1.7 8.1ZM3 12.6L22 12.6 20.1 23 4.9 23 3 12.6ZM4.2 15.7C4.2 16.1 4.6 16.6 5 16.6L7.8 16.6C8.2 16.6 8.6 16.2 8.6 15.7 8.6 15.3 8.2 14.9 7.8 14.9L5 14.9C4.5 14.9 4.2 15.3 4.2 15.7L4.2 15.7ZM10.3 15.7C10.3 16.1 10.7 16.6 11.1 16.6L13.9 16.6C14.3 16.6 14.7 16.2 14.7 15.7 14.7 15.3 14.3 14.9 13.9 14.9L11.1 14.9C10.6 14.9 10.3 15.3 10.3 15.7L10.3 15.7ZM16.4 15.7C16.4 16.1 16.8 16.6 17.2 16.6L20 16.6C20.4 16.6 20.8 16.2 20.8 15.7 20.8 15.3 20.4 14.9 20 14.9L17.2 14.9C16.7 14.9 16.4 15.3 16.4 15.7L16.4 15.7ZM6.7 19.7C6.7 20.1 7.1 20.5 7.5 20.5L10.3 20.5C10.7 20.5 11.1 20.1 11.1 19.7 11.1 19.2 10.7 18.8 10.3 18.8L7.5 18.8C7 18.8 6.7 19.3 6.7 19.7L6.7 19.7ZM13.9 19.7C13.9 20.1 14.3 20.5 14.7 20.5L17.5 20.5C17.9 20.5 18.3 20.1 18.3 19.7 18.3 19.2 17.9 18.8 17.5 18.8L14.7 18.8C14.2 18.8 13.9 19.3 13.9 19.7L13.9 19.7Z"/></g></g></svg>

              </div>
            </div>
          </div>
          <div class="row row__half-row">
            <div class="column">
              <?php
                // Get the ID of a given category
                $category_id = get_cat_ID('Оригинальные запчасти');

                // Get the URL of this category
                $category_link = get_category_link( $category_id );
              ?>
              <!-- Print a link to this category -->
              <a class="services__link" href="<?php echo esc_url( $category_link ); ?>">
                <div class="card card__spacer card--green">
                  <h3 class="card__title">Продажа запчастей</h3>
                  <p class="card__subtitle">Оригинальные</p>
                </div>
              </a>
            </div>
            <div class="column">
              <?php
                // Get the ID of a given category
                $category_id = get_cat_ID('Китайские запчасти');

                // Get the URL of this category
                $category_link = get_category_link( $category_id );
              ?>
              <a class="services__link" href="<?php echo esc_url( $category_link ); ?>">
                <div class="card card--green">
                  <h3 class="card__title">Продажа запчастей</h3>
                  <p class="card__subtitle">Китайские</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <div class="modal-section">
        <article class="modal">
          <svg class="modal__icon-close" width="30px" height="30px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M27.7297297,0.648648649 L15.8513514,12.527027 C15.3648649,13.0135135 14.5945946,13.0135135 14.1486486,12.527027 L2.27027027,0.648648649 C1.78378378,0.162162162 1.01351351,0.162162162 0.567567568,0.648648649 L0.567567568,0.648648649 C0.0810810811,1.13513514 0.0810810811,1.90540541 0.567567568,2.35135135 L12.4459459,14.2297297 C12.9324324,14.7162162 12.9324324,15.4864865 12.4459459,15.9324324 L0.527027027,27.8513514 C0.0405405405,28.3378378 0.0405405405,29.1081081 0.527027027,29.5540541 L0.527027027,29.5540541 C1.01351351,30.0405405 1.78378378,30.0405405 2.22972973,29.5540541 L14.1081081,17.6756757 C14.5945946,17.1891892 15.3648649,17.1891892 15.8108108,17.6756757 L27.7297297,29.5945946 C28.2162162,30.0810811 28.9864865,30.0810811 29.4324324,29.5945946 L29.4324324,29.5945946 C29.9189189,29.1081081 29.9189189,28.3378378 29.4324324,27.8918919 L17.5945946,15.972973 C17.1081081,15.4864865 17.1081081,14.7162162 17.5945946,14.2702703 L29.472973,2.39189189 C29.9594595,1.90540541 29.9594595,1.13513514 29.472973,0.689189189 L29.472973,0.689189189 C28.9864865,0.202702703 28.2162162,0.202702703 27.7297297,0.648648649 L27.7297297,0.648648649 Z" id="Shape">
            </path>
          </svg>
          <h2 class="modal__title">Отвечаем на ваши вопросы</h2>
          <?php echo do_shortcode( '[ninja_form id=1]' ); ?>
          <!--<form class="form">
            <div class="form__group form__group-modal">
              <input class="field field--input" type="text" placeholder="Имя">
              <input class="field field--input" type="email" placeholder="Email">
            </div>
            <div class="form__group">
              <textarea class="field field--area" type="text" placeholder="Ваше сообщение"></textarea>
            </div>
            <div class="form__group form__group-btn">
              <button class="btn btn--secondary">Спросить</button>
            </div>
          </form>-->
        </article>
      </div>
      <section class="contacts">
        <div class="contacts__container">
          <div class="row">
            <div class="column">
              <div class="contacts__text-group">
                <h2 class="section-title contacts__title" id="contacts-title">Контакты</h2>
                <table class="contacts__table">
                  <tr>
                    <td class="contacts__item">e-mail:</td>
                    <td class="contacts__item-value contacts__item-value--email">
                      <a class="contacts__item-value-link" href="mailto:400250@bk.ru">400250@bk.ru</a>
                    </td>
                  </tr>
                  <tr>
                    <td class="contacts__item">адрес:</td>
                    <td class="contacts__item-value">
                      <p class="contacts__item-value-text">
                      г. Калуга,
                      ул. Дальняя,
                      д. 3.
                      </p>
                      <p class="contacts__item-value-text">8 (4842) 700-633</p>
                      <p class="contacts__item-value-text">9:00 до 18:00</p>
                    </td>
                  </tr>
                </table>
                <a class="btn btn__contacts" id="btn-contacts" href="#">Обратная связь</a>
              </div>
            </div>
            <div class="column">
              <div class="map" id="map"></div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
