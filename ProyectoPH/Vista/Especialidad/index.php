<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>TecnoShop</title>
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="estilos/estilo.css">

		<!-- javascript -->
		<script type='text/javascript' src="../js/jquery-1.7.1.min.js" > </script>
		<script type='text/javascript'>

			function cargarcontrolador(){
				$.post("../../Controlador/ProductController.php",
				{'opcion':'consultar'},respuesta);

				$.post("../../Controlador/CategoryController.php",
				{'opcion':'cargarCategorias'},respuesta2); 
			}
 
			function respuesta(arg){
				$("#datos").append(arg);
			}

			function respuesta2(arg){
				$("#categorias").append(arg);
			}
		
			window.onload=cargarcontrolador;
		
		</script>
	</head>
		
	<body>
	
		<?php
			include_once 'Navbar.php';
		?>

		

		<div class="container-lg mt-3 mb-5">
			<h1 class="text-center">Productos Destacados</h1>
			<div class="container-fluid">
				<div class="row" id="datos">
				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</body>
</html>