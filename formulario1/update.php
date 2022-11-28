<?php

include("conexion.php");
$con=conectar();

$CORREO=$_POST['CORREO'];
 $USUARIO=$_POST['USUARIO'];
$MENSAJE=$_POST['MENSAJE'];

$sql="UPDATE programacion SET USUARIO='$USUARIO',MENSAJE='$MENSAJE' WHERE CORREO='$CORREO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: table.php");
    }
?>