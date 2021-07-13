<?php
include("conexion.php");
error_reporting(E_ALL);
mysqli_set_charset($dbconn, "utf8");
$usuarioAdmin = $_POST['user'];
$nombreAdmin = $_POST['name'];
$contra = $_POST['password'];
$celular = $_POST['cell'];
$ciudad = $_POST['city'];
$correo = $_POST['email'];
$direccion =$_POST['location'];
$contraseniaMaster =$_POST['password3'];
$contrasenia = mysqli_real_escape_string($dbconn, $contraseniaMaster);
$contrasenia2= mysqli_real_escape_string($dbconn, $contra);
$estado=1;
$result= (mysqli_query($dbconn, "SELECT * FROM `masteradministrador` WHERE `CONTRASENIAMASTER` = '$contrasenia'"));
	if(mysqli_affected_rows($dbconn)==1){
		$sql=(mysqli_query($dbconn,"INSERT INTO `loginadministrador`(`USUARIOADMINISTRADOR`, `CONTRASENIAADMINISTRADOR`, `NOMBREADMINISTRADOR`, `CIUDAD`, `ESTADOADMINISTRADOR`, `DIRECCIONADMINISTRADOR`, `CELULAR`, `CORREO`) VALUES ('$usuarioAdmin','$contrasenia2','$nombreAdmin','$ciudad','$estado','$direccion','$celular','$correo')"));
		if(mysqli_affected_rows($dbconn)==1){
			echo "<script>alert('Datos guardados'); window.location.href='inicio.php?p=loginAdmin';</script>";
		}
		else{
			echo 'No se pudo insertar, usted ya tiene una cuenta creada <br>';
		}
	}
	else{
		echo 'No se pudo insertar, la contrasenia de administrador no es correcta';
	}
?>