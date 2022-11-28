<?php

include("conexion.php");
$con=conectar();

$CORREO=$_POST['CORREO'];
 $USUARIO=$_POST['USUARIO'];
$PLAN=$_POST['PLAN'];

$sql="UPDATE suscripcion SET USUARIO='$USUARIO',PLAN='$PLAN' WHERE CORREO='$CORREO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: table.php");
    }
?>