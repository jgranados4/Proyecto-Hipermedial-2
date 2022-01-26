<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>TecnoShop | Contactos</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="estilos/estilo.css">

		<script type='text/javascript' src="../js/jquery-1.7.1.min.js" > </script>
		<script type='text/javascript'>
			function cargarcontrolador(){
				$.post("../../Controlador/CategoryController.php",
					{'opcion':'cargarCategorias'},respuesta);
			}
			function respuesta(arg){
				$("#categorias").append(arg);
			}
    
			window.onload=cargarcontrolador;
		</script>
	</head>
	
	<body>
		<?php 
		include_once "Navbar.php";
		?>

		<div class="container mt-5">
			<div class="container">
				<div class="container text-center mb-5">
					<h2 class="text-start fs-1 fw-light d-inline-block">Contactos</h2>
					<p>Somo una tienda online con un gran catalogo de productos de todo tipo, desde celulares,</p>
					<p>laptops para office, hasta articulos de ultima generacion como laptops gamer</p>
					<p>que permiten desde asistir a tus clases de zoom o jugar juegos de ultima generacion</p>
					<p>sin ninguna limitacion</p>
					<img src="Imagenes/facebook.jpg" class="w-20 img-thumbnail" alt="...">
					<img src="Imagenes/instagram.jpg" class="w-20 img-thumbnail" alt="...">
					<img src="Imagenes/whatsapp.jpg" class="w-20 img-thumbnail" alt="...">
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</body>
</html>