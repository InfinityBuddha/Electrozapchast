<?php
/*
  Template Name: Catalog page
*/

get_header('v2'); ?>
    <main>
      <section class="catalog">
        <div class="catalog__container">
          <h1 class="section-title"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h1>
          <div class="catalog__brands">
            <div class="catalog__row">
              <?php

                if (have_posts()) {
                  while (have_posts()) {
                    the_post();

              ?>
                <div class="catalog__brand">
                  <h3 class="catalog__brand-name"><?php the_title(); ?></h3>
                  <?php the_content(); ?>
                </div>
              <?php
                  }
                }

              ?>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>

