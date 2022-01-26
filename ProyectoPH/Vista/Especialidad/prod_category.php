<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>TecnoShop | Categorias</title>

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
		$dbhost = 'localhost:3307';
		$dbuser = 'root';
		$dbpass = "";
		$dbname = "dbtecnoshop";

		$id = $_GET['id'];

		$obj_conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		$sql = "select * from tbproducto where id_categoria=" . $id;
		$resultado = $obj_conexion->query($sql);

		$sql2 = "select categoria from tbcategoria where id_categoria=". $id;
		$titulo = $obj_conexion->query($sql2);

		?>

		<div class="container-lg mt-5 mb-5">
			<p class="text-center fs-2 ">
			<?php 
			foreach($titulo as $row){
				$categoria = $row['categoria'];
				echo ucfirst($categoria) ;
			}
			?>
			</p>
		
			<div class="container-fluid">
				<div class="row" id="datos">

				<?php

				foreach($resultado as $fila){
					echo "<div class='col-4'>";
					$imagen = $fila['img'];
					$id = $fila['id_producto'];

					echo "<div style='background:white; box-shadow: 2px 2px 4px black; border-radius:6px;'>";
					echo "<a href='detail_prod.php?id=" . $id . "'" . "class='link-success' style='text-decoration:none;'>";
					echo "<img class='img-fluid mt-4' style='width: 450px; height:360px' src='../../" . $imagen . "'>";
					echo "<p style='color:black;'>" . $fila['nombre']."</p>";
					echo "</a>";
					echo "<p>". "$".$fila['precio']."</p>";
					echo "</div>";

					

					
	
					echo "</div>";
					}

				?>

				</div>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
	</body>
</html>