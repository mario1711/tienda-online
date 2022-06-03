<?php
    if(isset($_POST['login'])){
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

        if(empty($usuario)){
            echo "<p class= 'error'>*Falta el usuario</p>";
        }

        if(empty($clave)){
            echo "<p class= 'error'>*Falta ingresar la clave</p>";
        }

        if($usuario == 'root' && $clave == 'contraseña'){
            Header("Location: producto.php");
        }else{
            echo "<p class= 'error'>Usuario o contraseña invalidos</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <center>
    <div class = "card shadow-lg p-3 mb-5 bg-body rounded mt-5" style="width: 26rem;">
    <form method="post" class="card-body" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1 class="card-title">Iniciar sesion como administrador</h1>
        Usuario:<br>
        <input type="text" name="usuario"><br>
        Clave:<br>
        <input type="password" name="clave"><br><br>
        <input type="submit" name="login" value="Ingresar">
    </form>
    </div>
    </center>
    
</body>
</html>