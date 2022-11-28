<?php

include("conexion.php");
$con=conectar();

$CORREO=$_GET['id'];

$sql="DELETE FROM suscripcion  WHERE CORREO='$CORREO'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: table.php");
    }
?>
