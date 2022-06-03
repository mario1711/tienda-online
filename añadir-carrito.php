<?php
    session_start();

    include("conexion.php");
    $con = conectar();
    $id = $_POST['id'];
    $sesion_id = $_SESSION["id"];
    $sql = "INSERT INTO carrito VALUES(null , '$id' , '$sesion_id')";

    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php#productos");
    } else
        die('Algo salió mal')
?>