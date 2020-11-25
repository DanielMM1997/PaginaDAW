<?php
  include_once 'presentation.class.php';
  $title = "Wallpapers House - {$_GET['category']}";
  View::start($title);
?>

    <article class="article">
      <section class="destacados">
        <div class="container-fluid">
          <h2><?php echo ucfirst($_GET['category']);?></h2>
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
          </div>
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
          </div>
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
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </nav>
        </div>
      </section>
    </article>
  </div>

<?php 
  View::end();
?>