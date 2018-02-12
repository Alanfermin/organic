<!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>style.css">
      <link href="https://file.myfontastic.com/haxCGREj9ZXqXm84No5bXB/icons.css" rel="stylesheet">
      <style>
.banner1{
background: url("<?php bloginfo('template_url'); ?>../image/1.jpg");
background-size: cover;
background-position: center;
height: 400px;
padding: 0;
}			
</style>
      <title>Productos Orgánicos en Línea</title>
    </head>
    <body>
<div class="container-fluid bg-dark fixed-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
        <a class="navbar-brand" href="#">
          <img src="image/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
          Bootstrap
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <?php wp_nav_menu(array(
            'theme_location' => 'alan',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
            'menu_class' => 'nav-item'
    )); ?>


</nav>
   </div>
<div class="container-fluid banner1 d-flex flex-column justify-content-center align-items-center text-white"><!-- Pasar desde el d-flex al .banner1 en el css-->
  <div class="tex-center">
    <h1 class="display-4">Productos Saludables</h1>
  </div>
</div>
<div class="container-fluid navbar-dark bg-dark text-white py-3">
      <div class="container text-center">
        <p>Insumos orgánicos disponibles en todo lima. Aprovecha y solicita nuestro sistema de entrega inmediara</p>
      </div>
    </div>