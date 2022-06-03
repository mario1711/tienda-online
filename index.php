<?php
include("conexion.php");
$con = conectar();
session_start();
$_SESSION["id"] = session_id();
$sql = "SELECT * FROM `producto`";
$query = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilo.css">
	<script src ="js/carousel.js"></script>
	<title>Papeleria "Mastrid"</title>

</head>
<body>
	<div>
		<header class="color-rosa">
			<div class="contenedor-titulo">
				<h1 class="titulo">Stationary Pink</h1>
			</div>
			<div class="botones">
				<ul class="carrito-login">
					<li><a href="login.php" class="icon-login" target="_blank"><img src="img/login.png" class="icon-login-img"></a></li>
					<li><a href="ver-carrito.php" class="icon-login"><img src="img/carrito-de-compras.png" class="icon-login-img"></a></li>
				</ul>	
			</div>
			
			
			
			
		</header>
	</div>
		<nav class="navegacion-link">		
			<a href="">Inicio</a>
			<a href="#productos">Catalogo</a>
			<a href="nosotros.html">Nosotros</a>
			
		</nav>


	<div class="carousel">
    	<div id="imagen">
			<div class="texto-imagen">
				<h2>La mejor tienda de Papeleria</h2>
				<a href="#productos">Compra Ya</a>
			</div>
		</div>
	</div>

	<main class="catalogo">

			<div class="productos" id="productos">
			<?php
				while($row = mysqli_fetch_assoc($query)){
			?>
                <section class="producto">
						<img src= <?php  echo $row['imagen']?>>
				    	<p> <?php echo $row['descripcion']?> </p>
						<h3>$ <?php echo $row['precio']?></h3>
					<form action="añadir-carrito.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
						<button class="button">
							Add to cart
						</button>
					</form>
			    </section>
            

            <?php
                }
            ?>
			</div>
			
	</main>
			
		<footer>Están reservados todos los derechos. Queda prohibida la reproducción, el almacenamiento en memoria 
		electrónica o la transmisión por cualquier medio electrónico, mecánico, de fotocopiado, grabación, etc., 
		de la totalidad o parte de esta publicación sin autorización</footer>	

<!-- Tercer script entregado 
		 -->
	</body>
</html>