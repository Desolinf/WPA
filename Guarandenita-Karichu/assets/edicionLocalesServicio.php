<html>
    <body>
        <div class="container">
            <br>
            <h4>Editar locales de servicios</h4>
            <form enctype="multipart/form-data" id="datosLocalServicioE">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <input id="Id" name="Id" type="hidden" value="<?php echo $codigo;?>">
                    <?php
                        include("php/conexion.php");
                        $sql="SELECT `CODCATEGORIASERVICIO`, `NOMBRESERVICIO`, `PROPIETARIO`, `DIRECCIONSERVICIO`, `UBICACIONSERVICIO`, `CELULARSERVICIO`, `TELEFONOSERVICIO`, `ESTADOSERVICIO`, `LOGOSERVICIO`, `CORREO` FROM `tiendaservicios` where CODTIENDASERVICIO='$codigo'";
                        $result= mysqli_query($dbconn, $sql);
                        $row=mysqli_fetch_array($result);
                    ?>
                    <script>
                        $(document).ready(function(){
                            $('#categoriaTiendaE > option[value="<?php echo $row[0]?>"]').attr('selected', 'selected');
                        });
                    </script>
                        <label>Categoría</label>
                        <select id="categoriaTiendaE" name="categoriaTiendaE" required="" class="form-control">
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
                    <input type="text" maxlength="100" value="<?php echo $row['1']  ?>" required class="form-control" id="localServicio" name="localServicio">
                    </div>
                </div>
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" required maxlength="200" class="form-control" value="<?php echo $row['3']  ?>" id="direccionServicio" name="direccionServicio">
                </div>
                <div class="form-group">
                    <label>Ubicación en google maps</label>
                    <input type="text" class="form-control" name="ubicacionServicio" value="<?php echo $row['4']  ?>" id="ubicacionServicio" placeholder="https://goo.gl/maps/kf5g6TbhYzygqCu47" maxlength="200">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label >Nombre del propietario</label>
                    <input type="text" class="form-control" maxlength="100" required id="nombrePropietarioServicio" value="<?php echo $row['2']  ?>" name="nombrePropietarioServicio">
                    </div>
                    <div class="form-group col-md-6">
                    <label >Celular del propietario</label>
                    <input type="text" class="form-control" onkeypress="return validaNumericos(event)" required id="celularServicio" value="<?php echo $row['5']  ?>" name="celularServicio" maxlength="10">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label >Teléfono propietario</label>
                        <input type="text" maxlength="10" onkeypress="return validaNumericos(event)" class="form-control" value="<?php echo $row['6']  ?>" required id="telefonoServicio" name="telefonoServicio">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="validationCustom03" class="form-label">Email</label>
                        <input type="email" id="emailServicio" name="emailServicio" class="form-control"  placeholder="Escribe tu email" title="Email incorrecto" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" value="<?php echo $row['9']  ?>" maxlength="50" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <img class="mx-auto d-block" src="data: image/png; base64,<?php echo base64_encode($row[8]);?>" height="80" width="120">
                    </div>
                    <div class="form-group col-md-6">
                        <label >Cambiar logotipo del servicio</label>
                        <input type="file" class="form-control" id="logoServicio" name="logoServicio">
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