<?php
	session_start();
?>
<html>
	<head>
		<title>Problema</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	</head>
	<body>
		<?php
			if ($_SESSION['numeroaleatorio']==$_REQUEST['numero'])
			  header('Location:AgregarAnimal.php');
			else
			  echo "Incorrecto";
		?>
	</body>
</html>