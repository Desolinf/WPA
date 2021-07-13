<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="theme-color" content="#F0DB4F">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/-icon" href="images/favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Iconos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #000000; border-bottom-color: #FF0000;" >
            <a class="navbar-brand" href="inicioAdministrador.html">
              <img src="images/logo.png" width="170" height="80" class="d-inline-block align-top" alt="">
            </a>
             <!--Buscar-->
             <div class="form-outline">
              <input type="search" id="form1" class="form-control" placeholder="Buscar"
              aria-label="Search" />
            </div>
            <!--Buscar-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-bag-fill"></i> Tiendas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" class="<?php echo $pagina=='agregarTiendas' ? 'active': '';?>" href="?p=agregarTiendas">Agregar nueva tienda</a>
                    <a class="dropdown-item" class="<?php echo $pagina=='editarTiendas' ? 'active': '';?>" href="?p=editarTiendas">Editar tienda</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-shop-window"></i> Servicios
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" class="<?php echo $pagina=='agregarLocales' ? 'active': '';?>" href="?p=agregarLocales">Agregar locales de servicios</a>
                    <a class="dropdown-item" class="<?php echo $pagina=='editarLocales' ? 'active': '';?>" href="?p=editarLocales">Editar locales de servicios</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-person-fill"></i> Mi cuenta
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mi perfil</a>
                    <a class="dropdown-item" href="#">Reportes</a>
                    <div class="dropdown-divider "></div>
                    <a class="dropdown-item" href="#">Salir</a>
                  </div>
                </li>
              </ul>
            </div>
         </nav>
         <hr style="margin: 0; border-width:3px; color:#FF0000; background-color: #FF0000;">
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>    
  </body>
 <!-- <script src="js/scripts.js"></script> -->
</html>