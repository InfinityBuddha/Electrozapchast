<?php

function ju_enqueue() {
  wp_register_style ('ju_style' , get_template_directory_uri() . '/assets/style.css', time());

  wp_enqueue_style ('ju_style');

  wp_register_script ('ju_map' , get_template_directory_uri() . '/assets/js/map.js', array(), time(), true);
  wp_register_script ('ju_modal' , get_template_directory_uri() . '/assets/js/modal.js', array(), time(), true);
  wp_register_script ('ju_carousel' , get_template_directory_uri() . '/assets/js/carousel.js', array(), time(), true); //-> Загрузка скрипта в footer

  wp_enqueue_script ('ju_map');
  wp_enqueue_script ('ju_modal');
  wp_enqueue_script ('ju_carousel');
}
