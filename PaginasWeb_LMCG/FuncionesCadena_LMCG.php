<html>
	<head>
		<title>
		Funciones Cadenas
		</title>
	</head>
	<body bgcolor= "016C69">
	<font face="Rockwell" color= "FFFFFF" size="4">
<form method="post">
			<center>Un mensaje <input name= "Mensaje" size="50" type="text"></center><br><br>
<center><input value="Enviar" type="submit">
										<input value="Borrar" type="reset"><br><br></center>
<center>
		<marquee direction= "right" bgcolor= "F3824D">
			<font face="Comic Sans" color= "000000" size="5">
				</center>
<center>
	<b>Uso de Funciones para manejo de cadenas.</b>
		</marquee><br><br><br>
</center>
<?php
if (isset($_POST["Mensaje"]))
{
$mensaje=$_POST["Mensaje"];
$men=strlen($mensaje);
echo "La longitud de la Cadena es: $men<br>";
$mensaje=$_POST["Mensaje"];
$menl=ltrim($mensaje);
$mensajeltrim=strlen("$menl");
echo "La longitud del texto sin espacios al inicio es:  $mensajeltrim<br>";
$mensr=rtrim("$mensaje");
$mensajefinal=strlen("mensr");
echo "La longitud del texto sin espacios al final es: $mensajefinal<br>";
$mentr=trim($mensaje);
$mensajetrim=strlen("$mentr");
echo "La longitud del texto sin espacios al inicio y al final es: $mensajeltrim<br><br><br>";
echo "
<center>
		<marquee direction= 'right' bgcolor= 'F3824D'>
			<font face='Comic Sans' color= '000000' size='5'>
				</center>
<center>
	<b>En base a la cadena sin espacios se tiene lo siguiente</b>
		</marquee><br><br><br>
</center>";
$mensrtr=str_replace(' ', '-)', $mensaje);
echo "Remplazando espacios por -): $mensrtr<br>";
$mentou=strtoupper($mentr);
echo "Convirtiendo a Mayusculas: $mentou<br>";
$menlow=strtolower($mentr);
echo "Convirtiendo a Minusculas: $menlow<br>";
$menucf=ucfirst($mentr);
echo "Cambiando el primer caracter a mayuscula: $menucf<br>";
$menucw=ucwords($mentr);
echo "Cambiando la primer letra de cada palabra a mayuscula: $menucw<br>";

}




?>		
</font>
		</body>
</html>
