<?php

function ju_enqueue() {
  wp_register_style ('ju_style' , get_template_directory_uri() . '/assets/style.css', time());
  wp_register_style ('ju_swiper-style' , get_template_directory_uri() . '/assets/css/swiper.min.css', time());

  wp_enqueue_style ('ju_style');
  wp_enqueue_style ('ju_swiper-style');

  wp_register_script ('ju_map' , get_template_directory_uri() . '/assets/js/map.js', array(), time(), true);
  wp_register_script ('ju_modal' , get_template_directory_uri() . '/assets/js/modal.js', array(), time(), true);
  wp_register_script ('ju_swiper' , get_template_directory_uri() . '/assets/js/init-swiper.js', array(), time(), true);
  wp_register_script ('ju_init-swiper' , get_template_directory_uri() . '/assets/js/swiper.min.js', array(), time(), true);
  wp_register_script ('ju_jquery' , get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array(), time(), true);


  wp_enqueue_script ('ju_map');
  wp_enqueue_script ('ju_modal');
  wp_enqueue_script ('ju_init-swiper');
  wp_enqueue_script ('ju_swiper');
  wp_enqueue_script ('ju_jquery');
}

?>
