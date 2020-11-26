<?php
  include_once 'presentation.class.php';
  $title = "Wallpapers House - Regístrate";
  View::start($title);
  View::header();
  View::navegation();
?>
    <article class="article">
      <section>
        <div class="formlogin">
          <h2>Regístrarte</h2>
          <form action="" method="POST">
            <div class="form-group">
              <label for="">Nombre</label>
              <input type="text" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="">Correo electrónico</label>
              <input type="email" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="">Contraseña</label>
              <input type="password" class="form-control" id="">
            </div>
            <div class="form-group">
              <label for="">Repetir contraseña</label>
              <input type="password" class="form-control" id="">
            </div>
            <div class="row">
              <button type="submit" class="btn btn-primary mx-auto">Regístrate</button>
            </div>
          </form>
        </div>
      </section>
    </article>
  </div>
  
<?php 
  View::footer();
  View::scripts();
  View::end();
?>