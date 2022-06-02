<?php
$nombre=$_POST['nom'];
$apellido1=$_POST['apell1'];
$apellido2=$_POST['apell2'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$calle=$_POST['calle'];
$nint=$_POST['nint'];
$next=$_POST['next'];
$colonia=$_POST['col'];
$municipio=$_POST['mun'];
$estado=$_POST['edo'];
$cp=$_POST['cp'];
$correlec=$_POST['correl'];

include("../php/conecta.phtml");
$con=conecta();

$insertar="insert into personal values (default, '$nombre', '$apellido1', '$apellido2', $edad , '$sexo', '$calle', '$nint', '$num_ext', '$colonia', '$municipio', '$estado' '$cp', '$correlec')";

mysqli_query($con, $insertar);
echo "Usuario guardado."

?>

