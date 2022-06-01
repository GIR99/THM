<?php
$nombre=$_POST['nom'];
$password=$_POST['passw'];

/*Agregar archivo de conexion */
include("conecta.phtml");
$con=conecta();
$consulta = "select Nombre,Password from personal  WHERE (Nombre = '$nombre' AND Password = '$password');";
$resultado =mysqli_query($con,$consulta);
$filas = mysqli_num_rows($resultado);


if($filas > 0){
    header("Location:PrincipalUsuarios.html");
}else{
    echo 'Datos incorrectos';
    
}

msqli_free_result($resultado);
mysqli_close($con);
?>