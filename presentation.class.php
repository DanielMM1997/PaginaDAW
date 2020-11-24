<?php
    class View{
        public static function start($title){

            $html = "<!DOCTYPE html>
            <html>
            
            <head>
              <title>$title</title>
              <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
              <meta http-equiv=\"Contect-Type\" content=\"text/html; charset=UTF-8\">
              <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css\"
                integrity=\"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2\" crossorigin=\"anonymous\">
              <link rel=\"stylesheet\" href=\"styles.css\">
              <link rel=\"stylesheet\" href=\"https://unpkg.com/flickity@2/dist/flickity.min.css\">
            </head>
            
            <body>
              <header class=\"header\">
                <div class=\"logotipo\">
                  <a href=\"index.php\"><img class=\"logo\" src=\"imgs/logo.png\" alt=\"logo\"></a>
                </div>
                <div class=\"title\">
                  <h1>Wallpapers house</h1>
                </div>
                <div class=\"options\">
                  <div class=\"row\">
                    <div class=\"col\">
                      <a class=\"links\" href=\"view_registration.php\">Regístrate</a>
                    </div>
                    <div class=\"col\">
                      <a class=\"links\" href=\"view_profile.php\">Iniciar sesión</a>
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"search\">
                      <form class=\"form-inline\" action=\"\">
                        <input class=\"form-control\" type=\"search\" name=\"query\" placeholder=\"Buscar...\">
                        <button class=\"btn btn-success\" type=\"submit\" value=\"buscar\">
                          <img src=\"imgs/search-alt-2-regular-24.png\" alt=\"buscar\">
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class=\"menu-hidden\">
                  <img src=\"imgs/menu-regular-24.png\" alt=\"menu\">
                </div>
              </header>
              <div class=\"body\">
                <nav class=\"my-nav\">
                  <ul class=\"nav flex-column\">
                    <li class=\"nav-item\">
                      <a class=\"nav-link d-none\" href=\"view_profile.php\">Iniciar sesión</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link d-none\" href=\"view_registration.php\">Regístrate</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=recientes\">Fondos recientes</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=destacados\">Fondos destacados</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=animales\">Animales</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=paisajes\">Paisaje</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=universo\">Universo</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=ciudades\">Cuidades</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=futbol\">Fútbol</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=baloncesto\">Baloncesto</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=tenis\">Tenis</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=coches\">Coches</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=motos\">Motos</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link active\" href=\"view_categories.php?category=aviones\">Aviones</a>
                    </li>
                  </ul>
                </nav>
            ";
            echo $html;
        }

        public static function end(){
            echo '<footer class="footer">
            <a class="links" href="#">¿Quiénes somos?</a>
            <a class="links" href="#">Contacta con nosotros</a>
            <a class="links" href="#">Política de privacidad</a>
            </footer>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="scripts.js"></script>
            <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
            </body>
            </html>';
        }
    }