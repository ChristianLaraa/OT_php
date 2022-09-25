<html>
	<head>
		<title>
		Nombre Variable
		</title>
</head>
	<body bgcolor= "EAAEB6">
			<font face="Rockwell" color= "000000" size="4">
		<form method="post"><br>
			<center>Nombre de la Persona: <input name= "Nombre" size="20" type="text"></center><br><br>
				<center><input value="Enviar" type="submit">
					<input value="Borrar" type="reset"><br><br></center>	
</form>
<?php

$nombrePersona=$_POST["Nombre"];  /*Por medio del arreglo asociativo correspondiente Obtengo la información cuyo name es Nombre y le asigno una variable */
$saludo="Bienvenid@";
echo "<center>$saludo: $nombrePersona</center>";





?>

	</font>
		</body>
</html>