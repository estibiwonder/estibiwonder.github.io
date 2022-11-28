<?php
include("conexion.php");
$con=conectar();

$CORREO=$_POST['CORREO'];

$USUARIO=$_POST['USUARIO'];
$MENSAJE=$_POST['MENSAJE'];


$sql="INSERT INTO programacion VALUES('$CORREO','$USUARIO','$MENSAJE')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.html");
    
}else {
}
?>