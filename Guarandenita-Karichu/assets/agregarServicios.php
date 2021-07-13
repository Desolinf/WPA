<html>
<!--------------------------- FORMULARIO QUE AGREGA LOS SERVICIOS DE LAS TIENDAS--------------------------->
    <body>
        <div class="container">
            <br>
            <?php
                include("php/conexion.php");
                $sql="SELECT `NOMBRESERVICIO` FROM `tiendaservicios` WHERE CODTIENDASERVICIO='$codigo'";
                $result= mysqli_query($dbconn, $sql);
                $row=mysqli_fetch_array($result);
            ?>
            <h4>Agregar servicios de la tienda: <?php echo $row[0];?></h4>
            <form enctype="multipart/form-data" id="datosServiciosAgregar">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input id="idLocal" name="idLocal" type="hidden" value="<?php echo $codigo;?>"> 
                        <label>Nombre del servicio</label>
                        <input type="text" maxlength="100" class="form-control" id="nombreServicio" name="nombreServicio" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Precio del servicio</label>
                        <input type="number" maxlength="100" class="form-control" id="precioServicio" name="precioServicio" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Descripción</label>
                        <textarea  rows="5" type="text" id="descripcionServicio" name="descripcionServicio" class="form-control" minlength="70" maxlength="100" required></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Estado del servicio</label>
                        <select id="estadoServicio" name="estadoServicio" class="form-control" required>
                            <option value="">Seleccione</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Servicio nuevo</label>
                        <select id="servicioNuevo" name="servicioNuevo" class="form-control" required>
                            <option value="">Seleccione</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="alert alert-primary" role="alert">
                   Se puede agregar una o más fotos
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="file" id="file" name="file[]" class="form-control" value="" multiple/>
                    </div>
                </div>
                <div id="respuesta" style="text-align:center"></div>
                <button type="submit" id="guardarServicios" class="btn btn-danger mx-auto d-block">Guardar</button>
            </form>
            <br>
        </div>
        <script type="text/javascript" src="js/funcionesJava.js"></script>
    </body>
</html>