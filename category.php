<?php
/*
  Template Name: Catalog page
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

