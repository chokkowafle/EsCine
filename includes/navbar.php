<?php
// Inicia la sesión si el archivo se carga desde una página sin sesión activa.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Prepara la ruta base para enlaces seguros en distintas carpetas.
$basePath = $basePath ?? '';
$baseHref = htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8');
?>

<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #d7263d;">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="index.php">
        <img src="assets/logoblancoOF.png" alt="ES Cine" width="auto" height="90" class="d-inline-block align-text-top">
    </a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" style="color: #fefefe" href="index.php">Cartelera</a></li>
        <li class="nav-item"><a class="nav-link" style="color: #fefefe" href="link.php">Confiteria</a></li>
      </ul>
    </div>
  </div>
</nav>

 