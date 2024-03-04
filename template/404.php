<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootscore
 */

get_header();
?>
<div id="content" class="site-content container py-5 mt-5  crash-404">
  <div id="primary" class="content-area con-main">

    <main id="main" class="site-main">

      <section class="error-404 not-found">
        <div class="page-404 -pt-13 -pb-8">

          <h1 style="font-size:200px !important;" class="text-center mb-2" data-aos="fade-up">404</h1>
          <!-- Remove this line and place some widgets -->
          <p class="fs-24 text-center" data-aos="fade-100">Przepraszamy, coś poszło nie tak. Strona o podanym adresie nie istnieje.</p>
          <!-- 404 Widget -->
          
          <div class="main-btn -mt-4 text-center" data-aos="fade-200"><a href="https://abpol-serwis.pl">Strona główna</a></div>
        </div>
      </section><!-- .error-404 -->

    </main><!-- #main -->

  </div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();
