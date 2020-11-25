<?php
  include_once 'presentation.class.php';
  $title = "Wallpapers House - {$_GET['category']}";
  View::start($title);
?>

    <article class="article">
      <section class="destacados">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="imagen">
              <img src="imgs/basico.png" alt="imagen">
            </div>
          </div>
          <div class="row">
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
          <div class="row">
            <div class="col-2 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-2 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-2 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-2 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-2 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-2 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
          </div>
        </div>
      </section>
    </article>
  </div>
  
<?php 
  View::end();
?>