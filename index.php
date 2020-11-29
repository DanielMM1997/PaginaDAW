<?php
  include_once 'presentation.class.php';
  View::start('Wallpapers House - Home');
  View::header();
  View::navegation();
?>
    <article class="article col-lg-10 col-12">
      <section class="destacados">
        <div class="container-fluid p-lg-3 p-0">
          <div class="my-3">
            <h2>Fondos destacados</h2>
          </div>
          <div class="row rellenarDestacadas mx-0"></div>
          <div class="row justify-content-end pr-3">
            <a class="btn btn-outline-primary" href="view_categories.php?category=destacados">Ver todas &raquo</a>
          </div>
        </div>
      </section>
      <section class="recientes">
        <div class="container-fluid p-3">
          <h2>Fondos recientes</h2>
          <div class="row rellenarRecientes mx-0"></div>
          <div class="row justify-content-end pr-3">
            <a class="btn btn-outline-primary" href="view_categories.php?category=recientes">Ver todas &raquo</a>
          </div>
        </div>
      </section>
    </article>

<?php 
  View::footer();
  View::scripts();
  echo '<script type="text/javascript">updateImagesDestacadas(); </script>';
  echo '<script type="text/javascript">updateImagesRecientes(); </script>';
  View::end();
?>