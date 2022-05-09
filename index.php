<?php get_header();
?>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.html">Navbar básico</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Hola<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Texto<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" tabindex="-1">Videos</a>
        </li>
      </ul>
    </div>
  </nav>
    <body>
    <style type="text/css">
body
{
background-image:url('<?php echo get_theme_file_uri("/img/fondo.jpg")  ?>');
background-size: 100%;
background-repeat: no-repeat;
height: 100vh;
text-align: center;
}
</style>
</body>
<?php get_footer();
?>