<?php
$pagina = "usuarios"; 
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php require('../_layout/cargar_css.php'); ?>
    <title><?php require('title.php'); ?></title>
  </head>
  <body>
    <div class="container-fluid">

    <!-- Menu NAVBAR -->
    <div class="container">
      <?php require('../_layout/menu.php'); ?>
    </div>
    <!-- Content -->
    <div class="container mt-2">
      <?php require('content.php'); ?>
    </div>

    <!-- Footer -->
    <div class="container">
      <?php require('../_layout/footer.php'); ?>
    </div>

  </div>
  <?php require('../_layout/cargar_js.php'); ?>
  </body>
</html>
