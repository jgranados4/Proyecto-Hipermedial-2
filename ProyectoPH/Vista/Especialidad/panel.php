<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>TecnoShop | Admin Activo</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="estilos/estilo.css">

		<script type='text/javascript' src="../js/jquery-1.7.1.min.js" > </script>
		<script type='text/javascript'>

			function cargarcontrolador(){
				$.post("../../Controlador/CategoryController.php",
				{'opcion':'cargarCategorias'},respuesta2);
			}
    
			function respuesta2(arg){
				$("#categorias").append(arg);
			}

			window.onload=cargarcontrolador;
		
		</script>
	</head>
	
	<body>
		<?php
		include_once "Navbar.php";
		?>
	
		<div class="container-lg mt-2 mb-2">
			<p class="text-center fs-2 fw-dark mb-2">Administracion de productos</p>
		</div>	
		
		<div class="container" style="margin-top: 30px;">
			
				<div class="row">
				<div class="col">
					
					<a href="user_table.php" class="btn btn-lg btn-primary mt-2">Tabla de Usuarios</a>    
				
		</div>
		<div class="col">
			
					<a href="product_table.php" class="btn btn-lg btn-primary mt-2">Tabla de Productos</a>    
				
		</div>
		<div class="col">
			
					<a href="city_table.php" class="btn btn-lg btn-primary mt-2">Tabla de Ciudades</a>    
				
		</div>
		<div class="col">
			
					<a href="category_table.php" class="btn btn-lg btn-primary mt-2">Tabla de Categorias</a>    
			
		</div>
				</div>
			
		</div>
		<div class="container-lg mt-2 mb-2">
			<p class="text-center fs-2 fw-dark mb-2"></p> 
		</div>	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	
	</body>
</html>