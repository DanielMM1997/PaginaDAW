<?php
  include_once 'presentation.class.php';
  $title = "Wallpapers House - Regístrate";
  View::start($title);
  View::header();
  View::navegation();
?>
    <article class="article col-lg-10 col-12">
      <section>
        <div class="formlogin">
          <h2>Regístrarte</h2>
          <form action="/checkRegistration.php" method="POST" onsubmit="return validarDatos()">
            <div class="form-group">
              <label for="">Nombre</label>
              <input type="text" class="form-control" id="nombre"
              required  minlength="5" maxlength="20">
              <span id="span_nombre"></span>
            </div>
            <div class="form-group">
              <label for="">Correo electrónico</label>
              <input type="email" class="form-control" id="correo"
              required minlength="6" maxlength="32" pattern="^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]{4,}@[a-zA-Z0-9-]{4,}(?:.[a-zA-Z0-9-]+)$"
              title="Ejemplo: correo781@caracteres.dominio">
              <span id="span_correo"></span>
            </div>
            <div class="form-group">
              <label for="">Contraseña</label>
              <input type="password" class="form-control" id="contraseña"
              required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\w\W]{8,}$" minlength="8" maxlength="32"
              title="Debes introducir mínimo un número, una mayuscula y una minuscula">
              <span id="span_contra"></span>
            </div>
            <div class="form-group">
              <label for="">Repetir contraseña</label>
              <input type="password" class="form-control" id="contraseña2"
              required  minlength="6" maxlength="32">
              <span id="span_contra2"></span>
            </div>
            <div class="row justify-content-center">
              <button type="submit" class="btn btn-primary">Regístrate</button>
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