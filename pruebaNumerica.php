<html>
	<head>
		<title>Problema</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<form action="pruebaNumerica3.php" method="post">
			Dígitos verificadores:<img src="pruebaNumerica2.php">
			<br>
			Ingrese valor:
			<input type="text" name="numero">
			<br>
			<input type="submit" value="Verificar">
		</form>
	</body>
</html>
<?php
		
	      session_start();
			echo "<br><br>";echo "<br><br>";
			echo "Nombre de usuario :".$_SESSION['nombre'];
			echo "<br><br>";
			echo "La clave :".$_SESSION['contrasena'];
			
		?>