<?php
  include_once 'presentation.class.php';
  $title = "Wallpapers House";
  View::start($title);
  View::header();
  View::navegation();
?>
  <div class="col pt-3">
    <h1>Te has resgistrado correctamente</h1>
    <a href="/index.php">Pulsa aqui para volver al inico</a>
  </div>

<?php 
View::footer();
View::scripts();
View::end();
?>