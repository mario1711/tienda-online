<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM `producto`";
$query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Insertar productos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <script src="js/validar.js"></script>
            <center>
            <div class="container-md mt-2">
                    <div> 
                        <div class="col-md-6">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                    <input type="hidden" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" id="nombre" class="form-control mb-3" name="descripcion" placeholder="Descripcion">
                                    <input type="number" id="precio" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="number" id="cantidad" class="form-control mb-3" name="cantidad" placeholder="Cantidad">
                                    <input type="text" id="imagen" class="form-control mb-3" name="imagen" placeholder="Imagen" >
                                    <input type="submit"  class="btn btn-primary" onclick = "return validar();">
                                </form>
                        </div>

                        <br>

                        <div class="col-md-8">
                            <table class="table table-light">
                                <thead class="table-dark" >
                                    <tr>
                                        <th>id</th>
                                        <th>descripcion</th>
                                        <th>precio</th>
                                        <th>cantidad</th>
                                        <th>imagen</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>

                                
                                        <?php
                                                while($row = mysqli_fetch_assoc($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['cantidad']?></th>  
                                                <th><?php  echo $row['imagen']?></th>    
                                                <th><a href="update-form.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
           </center> 
           
    </body>
</html>