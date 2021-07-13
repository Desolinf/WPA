<html>
<!-- ************************ PAGINA QUE MUESTRA LOS SERVICIOS DE CADA LOCAL *************************************-->
    <body>
    <div class="container">
        <div class="container">
            <?php
                include("php/conexion.php");
                $sql="SELECT `NOMBRESERVICIO` FROM `tiendaservicios` WHERE CODTIENDASERVICIO='$codigo'";
                $result= mysqli_query($dbconn, $sql);
                $row=mysqli_fetch_array($result);
            ?>
            <h1>Servicios de <?php echo $row[0];?></h1>
            <a class="btn btn-primary" onclick="agregarLocalServicio('<?php echo $codigo;?>')">Agregar nuevo servicio</a>
            <br><br>
            <div class="row">
            <?php
                $sql1="SELECT DISTINCT se.CODSERVICIO, se.NOMBRESERVICIO, se.PRECIOSERVICIO, se.ESTADOSERVICIO, se.DESCRIPCION FROM `TIENDASERVICIOS` AS ts LEFT JOIN `servicios` AS se USING(CODTIENDASERVICIO) LEFT JOIN `FOTOSERVICIO` as fs USING(CODSERVICIO) WHERE ts.CODTIENDASERVICIO='$codigo'";
                $resultado= mysqli_query($dbconn, $sql1);
                while ($datoServicio=mysqli_fetch_row($resultado)) {
                    $cod=$datoServicio[0];
                    $sql2="SELECT DISTINCT `FOTOSERVICIO` FROM `fotoservicio`  WHERE `CODSERVICIO`='$cod' LIMIT 1";
                    $resultado2= mysqli_query($dbconn, $sql2);
                    $row=mysqli_fetch_array($resultado2);
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6" >
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="thumbnail">       
                                <input id="IdLocal" name="IdLocal" type="hidden" value="<?php echo $codigo;?>"> 
                                <input id="IdServicio" name="IdServicio" type="hidden" value="<?php echo $datoServicio[0];?>">
                                <img class="mx-auto d-block" src="data: image/png; base64,<?php echo base64_encode($row[0]);?>" height="100" width="140">
                                <div class="caption">
                                    <h5><?php echo $datoServicio[1];?></h5>
                                    <p><?php echo $datoServicio[4];?></p>
                                    <p><b>Precio: </b><?php echo $datoServicio[2];?></p>
                                    <div>
                                        <a class="btn btn-primary" onclick="codigoLocalServicio('<?php echo $datoServicio[0];?>')">Editar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
        <script type="text/javascript" src="js/funcionesJava.js"></script>
        <script>
        function agregarLocalServicio(codigo) {
            var cd = codigo;
            window.location.href =('inicio.php?p=agregarServicios&codigo='+cd); 
        }
        function codigoLocalServicio(codigo) {
            var cd = codigo;
            window.location.href =('inicio.php?p=editarServicios&codigo='+cd); 
        }
        </script>
    </body>
</html>