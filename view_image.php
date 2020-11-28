<?php
  include_once 'presentation.class.php';
  $id = $_GET['id'];
  $category = $_GET['category'];
  $title = "Wallpapers House";
  View::start($title);
  View::header();
  View::navegation();
?>

    <article class="article col-lg-10 col-12">
      <section class="destacados">
        <div class="container-xl">
          <div class="row rellenarImagen">
          </div>
          <div class="row justify-content-center">
            <div class="actions">
              <img src="imgs/heart-regular-24.png" alt="me gusta">
              <img src="imgs/download-regular-24.png" alt="descargar">
              <img src="imgs/save-regular-24.png" alt="guardar">
              <img src="imgs/share-alt-regular-24.png" alt="compartir">
              <img src="imgs/info-circle-regular-24.png" alt="informacion">
            </div>
          </div>
        </div>
      </section>
      <section class="recientes">
        <div class="container-fluid">
          <h2>Imágenes similares</h2>
          <div class="row rellenarCategorias"></div>
          <div id="pagination" class="row justify-content-center my-4"></div>
          </div>
        </div>
      </section>
    </article>
  </div>
  
<?php 
  View::footer();
  View::scripts();
  echo '<script type="text/javascript">updateImage("'. $id . '"); </script>';
  echo '<script type="text/javascript">updateImagesCategories("'. $category . '"); </script>';
  View::end();
?>