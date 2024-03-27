<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar y Sidebar Bootstrap</title>
  <!-- CSS de Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos personalizados -->
  <style>
    /* Estilos para el contenido principal */
    .main-content {
      margin-top: 60px; /* Altura de la navbar */
      padding: 20px;
      transition: all 0.3s;
    }

    /* Estilos para la barra lateral */
    .sidebar {
      position: fixed;
      top: 60px; /* Altura de la navbar */
      bottom: 0;
      left: 0;
      z-index: 100;
      width: 250px;
      padding-top: 20px;
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
      transition: all 0.3s;
    }

    /* Estilos para contraer la barra lateral */
    .sidebar.collapsed {
      width: 60px;
    }

    /* Estilos para el botón de encogimiento de la barra lateral */
    #sidebarCollapse {
      width: 40px;
      height: 40px;
      position: absolute;
      top: 10px;
      right: 10px;
      background-color: #f5f5f5;
      border: none;
      border-radius: 50%;
    }

    #sidebarCollapse span {
      display: block;
      width: 20px;
      height: 2px;
      background-color: #333;
      margin: 0 auto 5px auto;
    }
  </style>
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Mi Sitio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Enlace 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Enlace 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Enlace 3</a>
        </li>
      </ul>
      <!-- Botón para encoger/expandir la barra lateral -->
      <button class="btn btn-secondary" id="sidebarCollapse"><span></span><span></span><span></span></button>
    </div>
  </nav>

  <!-- Barra lateral -->
  <div class="sidebar bg-light">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="#">Opción 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Opción 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Opción 3</a>
      </li>
      <!-- Puedes añadir más opciones según sea necesario -->
    </ul>
  </div>

  <!-- Contenido principal -->
  <div class="main-content" id="mainContent">
    <h1>Contenido Principal</h1>
    <p>Este es el contenido principal de la página.</p>
  </div>

  <!-- JavaScript de Bootstrap (opcional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Script para encoger/expandir la barra lateral -->
  <script>
    $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
        $('.sidebar').toggleClass('collapsed');
        $('#mainContent').toggleClass('col-12 col-md-10');
      });
    });
  </script>
</body>
</html>
