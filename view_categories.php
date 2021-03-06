<?php
  include_once 'presentation.class.php';
  $category = $_GET['category'];
  $title = "Wallpapers House - {$category}";
  View::start($title);
  View::header();
  View::navegation();
?>

    <article class="article col-lg-10 col-12">
      <section class="destacados">
        <div class="container-fluid p-lg-3 p-0">
          <h2><?php echo ucfirst($category);?></h2>
          <div class="row rellenarCategorias mx-0"></div>
          <div id="pagination" class="row justify-content-center my-4"></div>
        </div>
      </section>
    </article>
    
<?php 
  View::footer();
  View::scripts();
  echo '<script type="text/javascript">updateImagesCategories("'.$category.'"); </script>';
  View::end();
?>