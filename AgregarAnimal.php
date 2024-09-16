<html>
    <head>
        <title>Agregar  Animal - Examen</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
	<h3>Datos del Dispositivo</h3>
        <form name="Formulario" method="POST" action="">
			Código <input type="number" name="codigo" value="" required = "required"> <br/>
			Nombre <input type="text" name="nombre" value="" required = "required"> <br/>
			Género <br/>
			Macho <input type="radio" name="genero" value="Macho">
			Hembra <input type="radio" name="genero" value="Hembra"> <br/>
			Edad <input type="number" name="edad" value="" required = "required"> <br/>
			Hábitat
			<select name="habitat">
			  <option value="Tierra">Tierra</option>
			  <option value="Agua">Agua</option>
			  <option value="Ambos">Ambos</option>
			</select> <br/>
			<input value="Aceptar" type="submit" name="aceptar"/>
			<input value="Cancelar" type="reset" name="cancelar"/>
		</form>	
    </body>
</html>
<?php
 session_start();
			echo "<br><br>";echo "<br><br>";
			echo "Nombre de usuario :".$_SESSION['nombre'];
			echo "<br><br>";
			echo "La clave :".$_SESSION['contrasena'];
			
			
	$link = mysqli_connect("localhost", "root", "");

			mysqli_select_db($link, "ciudad");

			$tildes = $link->query("SET NAMES 'utf8'"); 
		if(!empty($_REQUEST['aceptar'])){
				$query = "INSERT INTO animales VALUES ('".$_REQUEST['codigo']."', '".$_REQUEST['nombre']."','".$_REQUEST['genero']."', '".$_REQUEST['edad']."','".$_REQUEST['habitat']."')";

				if(mysqli_query($link, $query))
				
					echo "El insert se ejecutó correctamente"."<br/>";
				else
					echo "no se pudo insertar";
			}
			
				
	
?>