<?php
    include("conexion.php");
    $con = conectar();
    session_start();
    $sesion = $_SESSION["id"];            
    $sql = "SELECT C.id , P.descripcion , P.precio , P.id FROM producto P JOIN carrito C ON P.id = C.id_producto  AND C.cliente = '$sesion';";
    $query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Carrito</title>
</head>
<body>
<div class= "container-lg">
<table class="table table-light m-5">
        <thead class="table-dark table-stripped" >
            <tr class = "text-center">
            <th >#</th>
            <th>Producto</th>
            <th>Precio</th>
            <th></th>
            </tr>
        </thead>

<tbody>
    <?php
        $i = 1;
        $total = 0;
        $descripcion[$i] = ''; 
        $precio[$i] = ''; 
        $idProducto[$i] = '';
 
        while($row = mysqli_fetch_row($query)){
    ?>
    <tr>
    <input type="hidden" name="id" value="<?php echo $row[0] ?>">
        <td class = "text-center"><?php  echo $i?></td>
        <td class = "text-center"><?php  echo $row[1]?></td> 
        <td class = "text-center">$<?php  echo number_format($row[2], 2)?></td> 
        <td class = "text-center"><a href="eliminar-carrito.php?id=<?php echo $row[0] ?>" class="btn btn-danger">Eliminar</a></td>                                    
    </tr>
    <?php 
        $i++;
        $total += $row[2];
        $descripcion[$i] = $row[1]; 
        $precio[$i] = $row[2]; 
        $idProducto[$i] = $row[3];

        }

        
     ?>
        <th colspan="2" class="text-center">Total:</th>
        <form name='comprar' method='POST' action='comprar.php'>
            <th class="text-center">
                <input type="hidden" name="descripcion" value="<?php echo $descripcion[2] ?>">
                <input type="hidden" name="precio" value="<?php echo $precio[2] ?>">
                <input type="hidden" name="total" value="<?php echo $total ?>">
                <input type="hidden" name="id" value="<?php echo $idProducto[2] ?>">
                <input type='submit' value='Comprar' />
            </th> <th class="text-center">$<?php  echo number_format($total, 2)?></th> 
        
             
        </form>

        
        <form name='generar' method='POST' action='generar-recibo.php' class="container-fluid">
                <input type="hidden" name="descripcion" value="<?php echo $descripcion[2] ?>">
                <input type="hidden" name="precio" value="<?php echo $precio[2] ?>">
                <input type="hidden" name="total" value="<?php echo $total ?>">
                <input type="hidden" name="id" value="<?php echo $idProducto[2] ?>">
                <input type='submit' value='Generar recibo'/>
              
        </form>
  
     </tbody>
    </table>
</div>

</body>
</html>