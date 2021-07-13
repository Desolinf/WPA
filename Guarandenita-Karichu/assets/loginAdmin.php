<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Guarandeñita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script language="JavaScript" src="js/carga.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #000000; border-bottom-color: #FF0000;" >
        <a class="navbar-brand" href="index.html">
          <img src="images/logo.png" width="170" height="80" class="d-inline-block align-top" alt="">
        </a>
     </nav>
     <hr style="margin: 0; border-width:3px; color:#FF0000; background-color: #FF0000;">
  </header>
<main>
<form class="contact-form" id="registroAdministrador">
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
        <legend>Crear una nueva cuenta</legend><hr>
            <form class="row g-3 needs-validation" novalidate enctype="multipart/form-data" >
                <div class="col-md-12">
                   <label for="validationCustom01" class="form-label">Usuario</label>
                    <input type="text" name="user" id="user" onkeypress="return validaNumericos(event)" class="form-control" placeholder="Usuario" title="El Usuario solo acepta numeros" minlength="10" pattern="^([0-9])*$" maxlength="10" onchange="validar()" required><label style="color:#0096d2;" id="salida">
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Nombre y Apellido</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" title="El Nombre solo acepta letras y espacios en blanco" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" maxlength="50" required>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Escribe una contraseña" title="La contraseña debe tener entre 6 y 12 caracteres, al menos un número, al menos una minúscula y al menos una mayúscula." pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,12}$" maxlength="12" minlength="6" required>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Repetir su contraseña</label>
                    <input type="password" name="password1" id="password1" class="form-control" placeholder="Repetir su contraseña" title="La contraseña debe tener entre 6 y 12 caracteres, al menos un número, al menos una minúscula y al menos una mayúscula." pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,12}$" maxlength="12" minlength="6" required onblur="coincidir()"><label style="color:#0096d2;" id="salida1">
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="cell" name="cell" title="Solo se acepta números" placeholder="Celular" maxlength="10" pattern="^([0-9])*$" required onkeypress="return validaNumericos(event)">
                </div>
                <div class="col-md-12">
                    <label for="validationCustom03" class="form-label">Ciudad</label>
                    <input type="text" title="El campo ciudad solo acepta letras y espacios en blanco" class="form-control" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" placeholder="Ciudad" maxlength="50" required id="city" name="city">
                </div>
                <div class="col-md-12">
                        <label for="validationCustom03" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"  placeholder="Escribe tu email" title="Email incorrecto" pattern="^[^@\s]+@[^@\s]+\.[^@\s]+$" maxlength="50" required>
                        <div class="valid-feedback">
                        </div>
                    </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="validationCustom02" id="location" name="location" placeholder="Direccion" maxlength="200" required>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Contraseña master</label>
                    <input type="password" name="password3" id="password3" class="form-control" placeholder="Escribe una contraseña" title="La contraseña debe tener entre 6 y 12 caracteres, al menos un número, al menos una minúscula y al menos una mayúscula." pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,12}$" maxlength="12" minlength="6" required>
                    <br>
                </div>
                <div class="text-info" id="respuesta" style="text-align:center" ></div>
                <br>
                <div class="col-md-12" style="text-align:center">
                    <button class="btn btn-danger " type="submit">Crear Cuenta</button>
                    <a class="" class="<?php echo $pagina=='iniciarsesionadmin' ? 'active': '';?>" href="?p=iniciarsesionadmin">Iniciar sesión</a>
                </div>
            </form>
        </div>
    </div>
</div>
</form>
</main>
<br>
<script type="text/javascript" src="js/funcionesJava.js"></script>
</body>