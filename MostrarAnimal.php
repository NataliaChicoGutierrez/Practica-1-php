<html>
	<head>
		<meta charset="utf-8">
	</head>
	<style>
table, th, td {
  border:1px solid black;
}
</style>
	<body> 
				<?php
				 
			
			
				$link = mysqli_connect("localhost", "root", "");

			mysqli_select_db($link, "ciudad");

			$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes

			$result = mysqli_query($link, "SELECT * FROM `animales`");
			
			echo "<table>
				  <tr>
				    <th>Codigo</th>
					<th>Nombre</th>
					<th>Genero</th>
					<th>Edad</th>
					<th>Habitat</th>
					
					
				  </tr>";
				

			for ($i=0; $i < $result->num_rows ; $i++ )
			{
			
				mysqli_data_seek ($result, $i);

				$extraido= mysqli_fetch_array($result);

				
				echo "<tr>";
				
				echo "<td> ".$extraido['codigo']."</a><br/>";
				
				echo "<td> ".$extraido['nombre']."<br/>";

				echo "<td>".$extraido['genero']."<br/>";

				echo "<td> ".$extraido['edad']."<br/>";

				echo "<td> ".$extraido['habitat']."<br/>";

				
			
				

			}
			
			echo "</table>";
			
			mysqli_free_result($result);  //libera el $result

			mysqli_close($link);
			
			 

				?>
				<a href="ActualizarAnimal.php">Ir a actualizar algun animal</a>
				
				</table>
    </body>
</html>
<?php
		
	      session_start();
			echo "<br><br>";echo "<br><br>";
			echo "Nombre de usuario :".$_SESSION['nombre'];
			echo "<br><br>";
			echo "La clave :".$_SESSION['contrasena'];
			
		?>