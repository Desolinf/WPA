<?php
include("conexion.php");
error_reporting(E_ALL);
mysqli_set_charset($dbconn, "utf8");
$categoriaTienda = $_POST['categoriaTienda'];
$nombreLocalServicio = $_POST['localServicio'];
$direccionServicio=$_POST['direccionServicio'];
$ubicacionServicio=$_POST['ubicacionServicio'];
$nombrePropietarioServicio=$_POST['nombrePropietarioServicio'];
$celularServicio=$_POST['celularServicio'];
$telefonoServicio=$_POST['telefonoServicio'];
$emailServicio=$_POST['emailServicio'];
$logoServicio=$_FILES['logoServicio'];
$logoServicio1=$_FILES['logoServicio']['name'];
$tamañoServicio=$_FILES['logoServicio']['size'];
$imagen=addslashes(file_get_contents($_FILES['logoServicio']['tmp_name']));
//********************Falta agregar el cod admin despues de haber iniciado sesion*******************************
$codAdmin=1;
$estado=1;  
$pagina= 'editarTiendas';
if (isset($logoServicio1) && $logoServicio1 != "") {
	if($logoServicio["type"]=="image/png" && $tamañoServicio <= 1000000){
		$sql = "INSERT INTO `tiendaservicios` (`CODTIENDASERVICIO`, `CODCATEGORIASERVICIO`, `CODADMINISTRADOR`, `NOMBRESERVICIO`, `PROPIETARIO`, `DIRECCIONSERVICIO`, `UBICACIONSERVICIO`, `CELULARSERVICIO`, `TELEFONOSERVICIO`, `ESTADOSERVICIO`, `LOGOSERVICIO`, `CORREO`) VALUES (NULL, '$categoriaTienda', '$codAdmin', '$nombreLocalServicio', '$nombrePropietarioServicio', '$direccionServicio', '$ubicacionServicio', '$celularServicio', '$telefonoServicio', '$estado', '$imagen', '$emailServicio');";
			if(mysqli_query($dbconn, $sql)){
				echo "<script>alert('Datos guardados'); window.location.href='inicio.php?p=editarLocales';</script>";
			}else{
				echo "Problemas en el servidor, intente nuevamente. Si el problema persiste contacte al administrador";
			}
	}
	else{
		echo "No se guardó, la imagen debe ser de tipo.png";
	}
}
else{
	$sql = "INSERT INTO `tiendaservicios` (`CODTIENDASERVICIO`, `CODCATEGORIASERVICIO`, `CODADMINISTRADOR`, `NOMBRESERVICIO`, `PROPIETARIO`, `DIRECCIONSERVICIO`, `UBICACIONSERVICIO`, `CELULARSERVICIO`, `TELEFONOSERVICIO`, `ESTADOSERVICIO`, `LOGOSERVICIO`, `CORREO`) VALUES (NULL, '$categoriaTienda', '$codAdmin', '$nombreLocalServicio', '$nombrePropietarioServicio', '$direccionServicio', '$ubicacionServicio', '$celularServicio', '$telefonoServicio', '$estado', ' ', '$emailServicio');";
	if(mysqli_query($dbconn, $sql)){
		//echo "Datos guardados";
		echo "<script>alert('Datos guardados'); window.location.href='inicio.php?p=editarLocales';</script>";
	}else{
		echo "Problemas en el servidor, intente nuevamente. Si el problema persiste contacte al administrador";
	}
}
?>