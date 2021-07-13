<?php
include("conexion.php");
error_reporting(E_ALL);
mysqli_set_charset($dbconn, "utf8");
$codigoLocal = $_POST['idLocal'];
$nombreServicio = $_POST['nombreServicio'];
$precioServicio=$_POST['precioServicio'];
$descripcionServicio=$_POST['descripcionServicio'];
$estadoServicio=$_POST['estadoServicio'];
$servicioNuevo=$_POST['servicioNuevo'];
$sql1= mysqli_query($dbconn, "INSERT INTO `servicios`(`CODTIENDASERVICIO`, `NOMBRESERVICIO`, `PRECIOSERVICIO`, `NUEVOSERVICIO`, `ESTADOSERVICIO`, `DESCRIPCION`) VALUES ('$codigoLocal','$nombreServicio','$precioServicio','$servicioNuevo','$estadoServicio','$descripcionServicio')");
$sql2= mysqli_query($dbconn, "SELECT `CODSERVICIO` FROM `servicios` WHERE `NOMBRESERVICIO`='$nombreServicio'");
$row=mysqli_fetch_array($sql2);
if (isset($_FILES['file'])) {
	for($x=0; $x<count($_FILES['file']["name"]);$x++){
		$file=$_FILES['file'];
		$nombre=$file['name'];
		$tipo = $file["type"][$x];
		$size = $file["size"][$x];
		$imagen=addslashes(file_get_contents($file['tmp_name'][$x]));
		if($tipo != "image/png" && $tipo != "image/jpg" && $tipo != "image/gif" && $tipo != "image/jpeg"){
			echo "Formato no admitido, debe ser png, jpg, gif o jpeg";
		}
		elseif($size  > 1000000){
			echo "El tamaño de la imagen debe ser de un MB como máximo";
		}
		else{
			$sql=("INSERT INTO `fotoservicio`(`FOTOSERVICIO`, `CODSERVICIO`) VALUES ('$imagen','$row[0]')");
			$result= mysqli_query($dbconn, $sql);
		}
	}
	echo "<script>alert('Datos guardados exitosamente'); window.location.href='inicio.php?p=agregarServicio&codigo=".$codigoLocal."';</script>";
}
else{
	echo "Error en el servidor, comuniquese con el administrador.";
}
?>