<html>
    <body>
        <div class="container">
            <br>
            <h4>Lista de locales de servicios</h4>
            <div class="container">
                <div class="row">
                <?php
                    include("php/conexion.php");
                    $sql="SELECT `CODTIENDASERVICIO`, `NOMBRESERVICIO`, `LOGOSERVICIO` FROM `tiendaservicios`";
                    $result= mysqli_query($dbconn, $sql);
                    while ($datosTiendaServicio=mysqli_fetch_row($result)) {
                        $datosServicio=$datosTiendaServicio[0];
                ?>
                
                    <div class="col-lg-3 col-md-4 col-sm-6" >
                        <div class="card text-center">
                          <div class="card-body">
                              <div class="thumbnail">
                                  <img class="mx-auto d-block" src="data: image/png; base64,<?php echo base64_encode($datosTiendaServicio[2]);?>" height="100" width="140">
                                  <div class="caption">
                                        <h5><?php echo $datosTiendaServicio[1];?></h5>
                                        <div class="center-block">
                                            <a class="btn btn-primary" onclick="datosLocales('<?php echo $datosServicio;?>')">Editar</a>
                                            <a class="btn btn-primary" onclick="datosServicios('<?php echo $datosServicio;?>')">Servicios</a>
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
        <script>
        function datosLocales(datosServicio) {
            var cd = datosServicio;
            window.location.href =('inicio.php?p=edicionLocalesServicio&codigo='+cd); 
            }
        function datosServicios(datosServicio) {
            var cd = datosServicio;
            window.location.href =('inicio.php?p=agregarServicio&codigo='+cd); 
        }
        </script>
        <script type="text/javascript" src="js/funcionesJava.js"></script>
    </body>
</html>