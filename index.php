<?php get_header();
?>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.html">Navbar básico</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.html">Hola<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="blog.html">Texto<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="pricing.html" tabindex="-1">Videos</a>
        </li>
      </ul>
    </div>
  </nav>
    <h1>hola buenas tardes</h1>
</body>
<?php get_footer();
?>