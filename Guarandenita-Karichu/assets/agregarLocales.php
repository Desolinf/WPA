<html>
    <body>
        <div class="container">
            <br>
            <h4>Agregar nuevos locales de servicios</h4>
            <form enctype="multipart/form-data" id="datosLocalServicio">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Categoría</label>
                        <select id="categoriaTienda" name="categoriaTienda" required="" class="form-control">
                            <option>SELECCIONE</option>
                            <?php
                                include("php/conexion.php");
                                $sqlLU="SELECT * FROM serviciocategoria ORDER BY NOMBRESERVICIO ASC;";
                                $resulLU=mysqli_query($dbconn, $sqlLU);
                                while ($datosLU=mysqli_fetch_row($resulLU)) {
                                    ?>
                                    <option value="<?php echo $datosLU[0];?>"><?php echo $datosLU[1];?></option>
                                <?php
                                }
                                ?>
                        </select>                    
                    </div>
                    <div class="form-group col-md-6">
                    <label>Nombre del local de servicio</label>
                    <input type="text" maxlength="100" required class="form-control" id="localServicio" name="localServicio">
                    </div>
                </div>
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" required maxlength="200" class="form-control" id="direccionServicio" name="direccionServicio" placeholder="Convención de 1884 y Pichincha">
                </div>
                <div class="form-group">
                    <label>Ubicación en google maps</label>
                    <input type="text" class="form-control" name="ubicacionServicio" id="ubicacionServicio" placeholder="https://goo.gl/maps/kf5g6TbhYzygqCu47" maxlength="200">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label >Nombre del propietario</label>
                    <input type="text" class="form-control" maxlength="100" required id="nombrePropietarioServicio" name="nombrePropietarioServicio">
                    </div>
                    <div class="form-group col-md-6">
                    <label >Celular del propietario</label>
                    <input type="text" class="form-control" onkeypress="return validaNumericos(event)" required id="celularServicio" name="celularServicio" maxlength="10">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label >Teléfono propietario</label>
                        <input type="text" maxlength="10" onkeypress="return validaNumericos(event)" class="form-control" required id="telefonoServicio" name="telefonoServicio">
                    </div>
                    <div class="form-group col-md-6">
                        <label >Logotipo del servicio</label>
                        <input type="file" class="form-control" id="logoServicio" name="logoServicio">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="validationCustom03" class="form-label">Email</label>
                        <input type="email" id="emailServicio" name="emailServicio" class="form-control"  placeholder="Escribe tu email" title="Email incorrecto" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" maxlength="50" required>
                    </div>
                </div>
                <div id="respuesta" style="text-align:center"></div>
                <button type="submit" id="guardarTiendaServicio" class="btn btn-danger mx-auto d-block">Guardar</button>
            </form>
            <br>
        </div>
        <script type="text/javascript" src="js/funcionesJava.js"></script>
    </body>
</html>