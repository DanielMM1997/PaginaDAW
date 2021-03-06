<?php
  include_once 'presentation.class.php';
  $title = "Wallpapers House - Perfil";
  View::start($title);
  View::header();
  View::navegation();
?>

    <article class="article col-lg-10 col-12">
      <section class="perfil">
        <div class="container-fluid p-lg-3 p-0">
          <div class="row">
            <div class="col-3">
              <img class="logo" src="imgs/profile.png" alt="imagen">
            </div>
            <div class="col-6 align-self-center">
              <p>Nombre usuario: </p>
              <p>Correo electronico: </p>
              <p>Teléfono: </p>
            </div>
            <div class="col-3 align-self-center">
              <div class="upload">
                <form action="">
                  <input type="file" hidden>
                  <input id="upload" class="btn btn-success" type="submit" value="subir">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="destacados">
        <h3>Fondos favoritos</h3>
        <div class="mb-5">
          <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            <div class="gallery-cell"><img src="imgs/basico.png" alt="imagen"></div>
            <div class="gallery-cell"><img src="imgs/basico.png" alt="imagen"></div>
            <div class="gallery-cell"><img src="imgs/basico.png" alt="imagen"></div>
            <div class="gallery-cell"><img src="imgs/basico.png" alt="imagen"></div>
            <div class="gallery-cell"><img src="imgs/basico.png" alt="imagen"></div>
            <div class="gallery-cell"><img src="imgs/basico.png" alt="imagen"></div>
            <div class="gallery-cell"><img src="imgs/basico.png" alt="imagen"></div>
          </div>
        </div>
      </section>
      <section class="destacados d-none">
        <div class="container-fluid">
          <h2>Imágenes favoritas</h2>
          <div class="row">
            <div class="col-1 align-self-center">
              <div class="previous">
                <img src="imgs/left-arrow.png" alt="" srcset="">
              </div>
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
            <div class="col-1 align-self-center">
              <div class="next">
                <img src="imgs/right-arrow.png" alt="" srcset="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="recientes d-none">
        <div class="container-fluid">
          <h2>Mis imágenes</h2>
          <div class="row">
            <div class="col-1 align-self-center">
              <div class="previous">
                <img src="imgs/left-arrow.png" alt="" srcset="">
              </div>
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
            <div class="col-1 align-self-center">
              <div class="next">
                <img src="imgs/right-arrow.png" alt="" srcset="">
              </div>
            </div>
          </div>
        </div>
      </section>
    </article>
  </div>

<?php
  View::footer();
  View::scripts();
  View::end();
?>