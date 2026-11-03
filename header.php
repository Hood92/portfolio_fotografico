<?php 
// Rileva il nome del file corrente senza estensione (es. "foto" da "foto.php")
$paginaCorrente = basename($_SERVER['PHP_SELF'], ".php"); 

// Se la root è vuota o punta a index, normalizziamo a 'home'
if ($paginaCorrente == 'index' || $paginaCorrente == '') {
    $paginaCorrente = 'home';
}
?>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark custom-header py-3">
    <div class="container">
      
      <!-- Logo a Sinistra -->
      <a class="navbar-brand navbar-brand-text" href="index.php">
        GIORGIO MORELLI <span class="fw-light fs-6 opacity-50 ms-1 d-none d-sm-inline">| FOTOGRAFIA</span>
      </a>

      <!-- Bottone Hamburger per Mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu spostato a DESTRA su Desktop -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav custom-nav ms-lg-auto text-center my-3 my-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php echo ($paginaCorrente == 'home') ? 'active' : ''; ?>" <?php echo ($paginaCorrente == 'home') ? 'aria-current="page"' : ''; ?> href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($paginaCorrente == 'foto') ? 'active' : ''; ?>" <?php echo ($paginaCorrente == 'foto') ? 'aria-current="page"' : ''; ?> href="foto.php">Foto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($paginaCorrente == 'contatti') ? 'active' : ''; ?>" <?php echo ($paginaCorrente == 'contatti') ? 'aria-current="page"' : ''; ?> href="contatti.php">Contatti</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
</header>