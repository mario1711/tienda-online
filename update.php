<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$imagen=$_POST['imagen'];

$sql="UPDATE producto SET  id='$id',descripcion='$descripcion',precio='$precio' , cantidad = '$cantidad', imagen='$imagen' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    } else{
        die('NO SE PUDO ACTUALIZAR');
    }
?>