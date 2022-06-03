<?php
    //Aqui va el codigo para comprar y
    // disminuir el inventario
    include ("conexion.php");
    $con = conectar();
    session_start();
    $sesion = $_SESSION["id"];  
    
    $sql2 = "SELECT C.id , P.descripcion , P.precio , P.id FROM producto P JOIN carrito C ON P.id = C.id_producto AND C.cliente = '$sesion';";

    $query2 = mysqli_query($con , $sql2);
    
    while ($row = mysqli_fetch_row($query2)) {
        $id=$row[3];
        $sql = "UPDATE producto SET cantidad = `cantidad` - 1 WHERE id = '$id' ;";
        $query = mysqli_query($con , $sql); 
    }

    if($query){
        Header("Location: ver-carrito.php");
        $sql = "DELETE FROM carrito where cliente = '$sesion'";
        $query = mysqli_query($con , $sql); 
    } 
    else{
        die('Ocurrio un error');
    } 
?>

    
