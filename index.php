<?php get_header();
?>
<body>
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
          <a class="nav-link" href="galeria.php">Galeria<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" tabindex="-1">Nada</a>
        </li>
      </ul>
    </div>
  </nav>

    <main>

    <h1>Hola mundo</h1>

    </main>
    


</body>
<?php get_footer();
?>