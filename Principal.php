
<html>
	<head>
		<title>Principal - Examen</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<div id="header">
			<ul class="nav">
				<li><a href="Principal.php">Inicio</a></li>
				<li><a href="#">Animales</a>
					<ul>
						<li><a href="pruebaNumerica.php">Agregar Animales</a></li>
						<li><a href="MostrarAnimal.php">Mostrar Animales</a></li>
						<li><a href="ActualizarAnimal.php">Actualizar Animales</a></li>
						<li><a href="InsertarUsuario.php"> Insertar nuevo usuario</a></li>
						</li>
					</ul>
				</li>
				<li><a href="Login.php" >Salir</a></li>
			</ul>
		</div>
		<?php
		
	      session_start();
			echo "<br><br>";echo "<br><br>";
			echo "Nombre de usuario :".$_SESSION['nombre'];
			echo "<br><br>";
			echo "La clave :".$_SESSION['contrasena'];
			
		?>
	</body>
</html>