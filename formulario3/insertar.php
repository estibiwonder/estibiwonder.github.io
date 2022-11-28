<?php
include("conexion.php");
$con=conectar();

$CORREO=$_POST['CORREO'];

$USUARIO=$_POST['USUARIO'];
$PLAN=$_POST['PLAN'];


$sql="INSERT INTO suscripcion VALUES('$CORREO','$USUARIO','$PLAN')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.html");
    
}else {
}
?>