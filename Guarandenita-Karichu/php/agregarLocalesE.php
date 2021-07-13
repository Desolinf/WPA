<?php
include("conexion.php");
//error_reporting(E_ALL);
mysqli_set_charset($dbconn, "utf8");
$codigoTiendaE = $_POST['Id'];
$categoriaTiendaE = $_POST['categoriaTiendaE'];
$nombreLocalServicio = $_POST['localServicio'];
$direccionServicio=$_POST['direccionServicio'];
$ubicacionServicio=$_POST['ubicacionServicio'];
$nombrePropietarioServicio=$_POST['nombrePropietarioServicio'];
$celularServicio=$_POST['celularServicio'];
$telefonoServicio=$_POST['telefonoServicio'];
$emailServicio=$_POST['emailServicio'];
$logoServicio1=$_FILES['logoServicio']['name'];
$logoServicio=$_FILES['logoServicio'];
$codAdmin=1;
$estado=1; 
if (isset($logoServicio1) && $logoServicio1 != "") {
    $tamañoServicio=$_FILES['logoServicio']['size'];
    $imagen=addslashes(file_get_contents($_FILES['logoServicio']['tmp_name']));
    if($logoServicio["type"]=="image/png" && $tamañoServicio <= 1000000)
    {
	$sql = "UPDATE `tiendaservicios` SET `CODCATEGORIASERVICIO`='$categoriaTiendaE',`NOMBRESERVICIO`='$nombreLocalServicio',`PROPIETARIO`='$nombrePropietarioServicio',`DIRECCIONSERVICIO`='$direccionServicio',`UBICACIONSERVICIO`='$ubicacionServicio',`CELULARSERVICIO`='$celularServicio',`TELEFONOSERVICIO`='$telefonoServicio',`LOGOSERVICIO`='$imagen',`CORREO`='$emailServicio' WHERE `CODTIENDASERVICIO`='$codigoTiendaE'";
		if(mysqli_query($dbconn, $sql)){
		    echo "<script>alert('Datos guardados'); window.location.href='inicio.php?p=editarLocales';</script>";
		}else{
		    echo "Problemas en el servidor, intente nuevamente. Si el problema persiste contacte al administrador";
		}
    }
}else{
    $sql = "UPDATE `tiendaservicios` SET `CODCATEGORIASERVICIO`='$categoriaTiendaE',`NOMBRESERVICIO`='$nombreLocalServicio',`PROPIETARIO`='$nombrePropietarioServicio',`DIRECCIONSERVICIO`='$direccionServicio',`UBICACIONSERVICIO`='$ubicacionServicio',`CELULARSERVICIO`='$celularServicio',`TELEFONOSERVICIO`='$telefonoServicio',`CORREO`='$emailServicio' WHERE `CODTIENDASERVICIO`='$codigoTiendaE'";
		if(mysqli_query($dbconn, $sql)){
		    echo "<script>alert('Datos guardados'); window.location.href='inicio.php?p=editarLocales';</script>";
		}else{
		    echo "Problemas en el servidor, intente nuevamente. Si el problema persiste contacte al administrador";
		}
} 
?>