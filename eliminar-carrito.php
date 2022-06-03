<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="  DELETE FROM carrito  WHERE id='$id'  ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ver-carrito.php");
    } else
        die('Algo salió mal')
?>