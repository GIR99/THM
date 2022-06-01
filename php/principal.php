
<?php 
//Conexion a BD
include_once("conexion.php");
$conn=ConexionBD();

$consulta=mysql_query($conn, "SELECT * FROM personal");


?>