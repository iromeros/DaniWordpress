<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">
    
    <style type="text/css">
        body{
            background-image:url('<?php echo get_theme_file_uri("/img/fondo.jpg")  ?>');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            text-align: center;
        }
    </style>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Navbar básico</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url("blog.php");?>">Blog<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url("galeria.php");?>">Galeria<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" tabindex="-1">Nada</a>
        </li>
      </ul>
    </div>
  </nav>
</head>
<body>