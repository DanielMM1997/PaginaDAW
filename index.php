<?php
  include_once 'presentation.class.php';
  View::start('Wallpapers House - Home');
  View::header();
  View::navegation();
?>
    <article class="article">
      <section class="destacados">
        <div class="container-fluid">
          <h2>Imágenes destacadas</h2>
          <div class="row rellenarDestacadas"></div>
          <div class="row justify-content-end pr-3">
            <a class="btn btn-primary" href="view_categories.php?category=destacados">Ver todas &raquo</a>
          </div>
        </div>
      </section>
      <section class="recientes">
        <div class="container-fluid">
          <h2>Imágenes recientes</h2>
          <div class="row rellenarRecientes"></div>
          <div class="row justify-content-end pr-3">
            <a class="btn btn-primary" href="view_categories.php?category=recientes">Ver todas &raquo</a>
          </div>
        </div>
      </section>
    </article>

<?php 
  View::footer();
  View::scripts();
  echo '<script type="text/javascript">addListener(); </script>';
  View::end();
?>