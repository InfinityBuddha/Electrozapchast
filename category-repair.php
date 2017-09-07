<?php
/*
  Template Name: Repair Page
*/

get_header('v2'); ?>
<?php

/**
 * @uses WP_Query
 * @uses get_queried_object()
 * @see get_the_ID()
 * @return int
 */
function get_the_post_id() {
  if (in_the_loop()) {
       $post_id = get_the_ID();
  } else {
       global $wp_query;
       $post_id = $wp_query->get_queried_object_id();
         }
  return $post_id;
} ?>

<?php $page_id = get_the_post_id(); ?>
    <main>
      <section class="catalog">
        <div class="catalog__container">
          <h1 class="section-title"><?php echo get_the_title( $page_id ); ?></h1>
          <div class="catalog__brands">
            <div class="catalog__row catalog__row--text">
              <p>
              ООО "Электрозапчасть" – это квалифицированные специалисты с большим опытом ремонта техники от различных производителей всех видов и моделей, сертифицированные услуги, наличие оригинальных запчастей к любой модели и самое современное фирменное оборудование. Заказать у нас ремонт электро и бензоинструмента вы можете, приехав к нам в сервисный центр по адресу 	г. Калуга, ул. Дальняя, д. 3.
              </p>
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
                      <p class="contacts__item-value-text">9:00 до 18:00 по будням</p>
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

