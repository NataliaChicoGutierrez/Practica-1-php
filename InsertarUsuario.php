<html>
   <head> 
        <title> Usuario </title>
		<meta charset="utf-8"> 
   </head> 
   <body>
        <h3> Usuario </h3>
        <form name="Login" method="POST" action=""> 
		                                           
		Digite su usuario:
		<input name="nombre" type="text"  placeholder="User" value=""> 
		
		<br/><br/> 
		
		
		clave:
		<textarea name="contrasena" type="text"  placeholder="direccion" value=""/> 
		</textarea>
		<br/><br/> 
		
		
		<input value="insertar" name="insertar" type="submit"> 
		
		
		<?php
		$link = mysqli_connect("localhost", "root", "");

			mysqli_select_db($link, "ciudad");

			$tildes = $link->query("SET NAMES 'utf8'"); 
			//insertar
			if(!empty($_REQUEST['insertar'])){
				$query = "INSERT INTO usuarios VALUES ('".$_REQUEST['nombre']."','".$_REQUEST['contrasena']."')";

				if(mysqli_query($link, $query))
				
					echo "El insert se ejecutó correctamente"."<br/>";
				else
					echo "no se pudo insertar";
			}
			