
<?php

session_start();
    if(isset($_SESSION['nombre'])&& isset ($_SESSION['contrasena'])){
		$_SESSION['nombre']=null;
		$_SESSION['contrasena']=null;
		
		session_destroy();
		
	}
?>
<html>
	<head>
		<title>Funcionario</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<form action="Principal.php" method="GET">
			Ingrese nombre de usuario:
			<input type="text" name="nombre"><br>
			Ingrese clave:
			<input type="password" name="contrasena"><br>
			
			<input type="submit" value="confirmar" name="aceptar">
		</form>
		
		<?php

	if (!empty($_GET['aceptar'])){
	$link = mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "examen");
	$query = "SELECT * FROM `usuarios` where nombre = '".$_GET['nombre']."' and contrasena = '".$_GET['contrasena']."'";
	if($result = mysqli_query($link, $query)){		
		mysqli_data_seek ($result, 0);
		$extraido= mysqli_fetch_array($result);
		if($extraido['nombre'] && $extraido['contrasena']){
			mysqli_free_result($result);
			mysqli_close($link);
			header('Location:Principal.php');	
		}
		else{
			mysqli_free_result($result);
			mysqli_close($link);
			echo '<script language="javascript">';
			echo 'alert("Datos incorrectos");';
			echo 'window.location.href=("login.php")';
			echo '</script>';
		}		
	}
}
			
?>
	</body>
</html>