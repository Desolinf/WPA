<html>
<!--------------------------- FORMULARIO QUE AGREGA LOS SERVICIOS DE LAS TIENDAS--------------------------->
    <body>
        <div class="container">
            <br>
            <?php
                include("php/conexion.php");
                $sql="SELECT `NOMBRESERVICIO`, `PRECIOSERVICIO`, `NUEVOSERVICIO`, `ESTADOSERVICIO`, `DESCRIPCION`FROM `servicios` WHERE CODSERVICIO='$codigo'";
                $result= mysqli_query($dbconn, $sql);
                $row=mysqli_fetch_array($result);
            ?>
            <h4>Editar servicio: <?php echo $row[0];?></h4>
            <form enctype="multipart/form-data" id="datosServiciosAgregar">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input id="idLocal" name="idLocal" type="hidden" value="<?php echo $codigo;?>"> 
                        <label>Nombre del servicio</label>
                        <input type="text" maxlength="100" class="form-control" id="nombreServicio" name="nombreServicio" required value="<?php echo $row[0]; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Precio del servicio</label>
                        <input type="number" maxlength="100" class="form-control" id="precioServicio" name="precioServicio" required value="<?php echo $row[1]; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Descripción</label>
                        <textarea  rows="5" type="text" id="descripcionServicio" name="descripcionServicio" class="form-control" minlength="100" maxlength="200" required><?php echo $row[4]; ?></textarea>
                    </div>
                </div>
                <div class="form-row">
                <script>
                    $(document).ready(function(){
                        $('#estadoServicio > option[value="<?php echo $row[3]?>"]').attr('selected', 'selected');
                    });
                    $(document).ready(function(){
                        $('#servicioNuevo > option[value="<?php echo $row[2]?>"]').attr('selected', 'selected');
                    });
                </script>
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
                <div class="form-row">
                    <label><b>Agregar nuevas imágenes</b></label>
                    <div class="form-group col-md-12">
                        <input type="file" id="file" name="file[]" class="form-control" value="" multiple/>
                    </div>
                </div>
                <label><b>Eliminar imágenes</b></label>
                <div class="form-row">
                <?php
                            $sql3=mysqli_query($dbconn, "SELECT `CODFOTOSERVICIO`, `FOTOSERVICIO`, `CODSERVICIO` FROM `fotoservicio` WHERE `CODSERVICIO`='$codigo'");
                            while ($fotoServicio=mysqli_fetch_row($sql3)){
                        ?>
                    <div class="form-group col-xs-6" >
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="thumbnail">
                                <div class="pull-left">
                                <input type="hidden" value="<?php echo $fotoServicio[0];?>"> <img src="data: image/png; base64,<?php echo base64_encode($fotoServicio[1]);?>" height="80" width="110"></div>
                                <div class="pull-left"><a onclick="codigoFotoServicio('<?php echo $fotoServicio[0];?>')"><img src="images/eliminar.png"/></a></div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <?php
                        }
                    ?> 
                </div>
                <div id="respuesta" style="text-align:center"></div>
                <button type="submit" id="guardarServicios" class="btn btn-danger mx-auto d-block">Guardar</button>
            </form>
            <br>
        </div>
        <script type="text/javascript" src="js/funcionesJava.js"></script>
        <script>
        function codigoFotoServicio(codigoFoto) {
            var cdf = codigoFoto;
            //alert ('Aqui esta'+cdf);
            <?php
                $cdf = "<script> document.writeln(cdf); </script>";
                $sqlR=mysqli_query($dbconn, "DELETE FROM `fotoservicio` WHERE `CODFOTOSERVICIO`='$cdf'");
            ?>
            alert ('Aqui esta'+cdf);
        }
        </script>
    </body>
</html>