<?php
include("conexion.php");
error_reporting(E_ALL);
mysqli_set_charset($dbconn, "utf8");
$usuarioAdmin = $_POST['user'];
$contra = $_POST['password'];
$usuario= mysqli_real_escape_string($dbconn, $usuarioAdmin);
$contrasenia2= mysqli_real_escape_string($dbconn, $contra);
$result= (mysqli_query($dbconn, "SELECT`NOMBREADMINISTRADOR`, `ESTADOADMINISTRADOR`, `CONTRASENIAADMINISTRADOR`, `USUARIOADMINISTRADOR` FROM `loginadministrador` WHERE `USUARIOADMINISTRADOR`= '$usuario' AND `CONTRASENIAADMINISTRADOR`= '$contrasenia2' AND `ESTADOADMINISTRADOR`='1'"));
if(mysqli_affected_rows($dbconn)==1){
	echo "<script> window.location.href='inicio.php?p=home1';</script>";
}
else{
	echo 'No se pudo ingresar, verifique sus datos';
}
?>