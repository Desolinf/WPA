<?php
$servername = "localhost";
$database = "tiendaproyecto1";
$username = "root";
$password = "123456";
// Create connection
$dbconn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$dbconn) {
    die("Conexión fallida, comuniquese con el administrador : " . mysqli_connect_error());
}
?>
