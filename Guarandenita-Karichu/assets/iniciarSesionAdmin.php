<form class="contact-form" id="iniciarSesionAdministrador">
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col col-md-6">
        <legend>Iniciar Sesión</legend><hr>
            <form class="row g-3 needs-validation" novalidate enctype="multipart/form-data" >
                <div class="col-md-12">
                   <label for="validationCustom01" class="form-label">Usuario</label>
                    <input type="text" name="user" id="user" onkeypress="return validaNumericos(event)" class="form-control" placeholder="Usuario" title="El Usuario solo acepta numeros" minlength="10" pattern="^([0-9])*$" maxlength="10" onchange="validar()" required><label style="color:#0096d2;" id="salida">
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Escribe una contraseña" title="La contraseña debe tener entre 6 y 12 caracteres, al menos un número, al menos una minúscula y al menos una mayúscula." pattern="^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{6,12}$" maxlength="12" minlength="6" required>
                </div><br>
                <div id="respuesta1" style="text-align:center"></div>
                <div class="col-md-12" style="text-align:center">
                    <button class="btn btn-danger" type="submit">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
</div>
</form>
<br>
<script type="text/javascript" src="js/funcionesJava.js"></script>