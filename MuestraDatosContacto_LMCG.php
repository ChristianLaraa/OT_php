<html>
	<head>
		<title>
		Datos del Contacto
		</title>
	</head>
	<body bgcolor= "B38BE7">
				<center>
		<marquee direction= "right" bgcolor= "000000">
			<font face="Comic Sans" color= "FFFFFF" size="5">
				</center>
<center>
	<b>Los datos enviados fueron: </b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "000000" size="4">
<?php
$contacto_nombre=$_GET["contacto_nombre"];
$texto_nombre="Nombre de la persona: ";
echo "<center>$texto_nombre $contacto_nombre</center><br>";


$contacto_correo=$_GET["contacto_email"];
$texto_correo="Correo Electronico: ";
echo "<center>$texto_correo $contacto_correo</center><br>";


$contacto_mensaje=$_GET["contacto_mensaje"];
$mensaje="Mensaje enviado: ";
echo "<center>$mensaje $contacto_mensaje</center><br>";

?>
</font>
		</body>
</html>