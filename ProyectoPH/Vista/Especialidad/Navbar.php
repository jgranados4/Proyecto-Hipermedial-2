<?php
   session_start();
?>

	<div class="Navbar">
    <nav class="navbar navbar-expand-lg ">
		<div class="container-fluid ">
			
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav " >
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink"role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
						NUESTRAS CATEGORIAS
                        </a>
                        <ul  class="dropdown-menu " style="background:blue; border-radius:20px;" id="categorias" aria-labelledby="navbarDropdownMenuLink">
                            
                        </ul>
                    </li>
					
					<li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACTANOS</a>
                    </li>
                </ul>
                <div class="logo">
                    <a class="navbar-brand h1 mb-0" href="index.php">
                    <img src="Imagenes/TecnoShop_Logo.jpg" alt="" height="30" class="d-inline-block align-text-bottom"> TecnoShop
                    </a>
                </div>

                <?php
                    
                    if(isset($_SESSION["usuarioid"]) && ($_SESSION["usuarioNombre"] == "admin")){

                        echo "<div class='ms-auto' >";
                        echo "<a class='nav-item ms-3' href='order.php' style='color:white;text-decoration: none;'>
                        Ver Carrito
                        </a>";
                        echo "<a class='nav-item btn btn-primary ms-3' href='panel.php' >Panel Admin</a>";
                        echo "<a class='nav-item btn btn-danger ms-3' ' href='../includes/logout.inc.php' >Logout</a>";
                        echo "</div>";

                    }
                    else if (isset($_SESSION["usuarioid"])){

                        echo "<div class='ms-auto'>";
                        echo "<a class='nav-item  ms-3' href='order.php' >
                        Ver Productos
                        </a>";
                        echo "<a class='nav-item btn btn-outline-light ms-5' href='shopping_cart.php'>
                        Productos 
                        </a>";
                        echo "<a class='nav-item btn btn-danger ms-3'  href='../includes/logout.inc.php' >Logout</a>";
                        echo "</div>";
                    }else{

                        echo "<div class='ms-auto'>";
						echo "<a class='nav-item btn btn-light ms-3' style='margin-right:10px;' href='login.php'>Login</a>";
                        echo "<a class='nav-item btn btn-primary' href='register.php'>Register</a>";
                        echo "</div>";
                    }

                ?>

            </div>    
        </div>
    </nav>
    </div>