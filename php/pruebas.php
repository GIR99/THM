<?php
//include agregar archivo de conexion (conecta.phtml) 
include("conecta.phtml");
$con=conecta();
$crear="create table ejemplo(id_ejemplo int not null auto_increment,nombre varchar(20),primary key(id_ejemplo))";
mysqli_query($con,$crear);
echo "listo";
?>
