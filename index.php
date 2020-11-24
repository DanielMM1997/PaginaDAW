<?php
  include_once 'presentation.class.php';
  View::start('Wallpapers House - Home');
?>
    <article class="article">
      <section class="destacados">
        <div class="container-fluid">
          <h2>Imágenes destacadas</h2>
          <div class="row">
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
          </div>
          <div class="row justify-content-end pr-3">
            <a class="" href="">Ver todas &raquo</a>
          </div>
        </div>
      </section>
      <section class="recientes">
        <div class="container-fluid">
          <h2>Imágenes recientes</h2>
          <div class="row">
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
            <div class="col-4 responsive">
              <img src="imgs/basico.png" alt="imagen">
            </div>
          </div>
          <div class="row justify-content-end pr-3">
            <a class="" href="">Ver todas &raquo</a>
          </div>
        </div>
      </section>
    </article>
  </div>

<?php 
  View::end();
?>