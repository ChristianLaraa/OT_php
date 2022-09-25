<html>
	<head>
		<title>
		Tabla de Multiplicar
		</title>
	</head>
	<body bgcolor= "6C1301">
				<center>
		<marquee direction= "right" bgcolor= "FAA13D">
			<font face="Comic Sans" color= "000000" size="5">
				</center>
<center>
	<b>Tabla de Multiplicar del número indicado</b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "FFFFFF" size="4">
	<form method="post">
	<center>Número de la tabla de multiplicar <input name= "Numero" size="5" type="text"></center><br><br>
	<center><input value="Generar Tabla" type="submit">
										<input value="Borrar" type="reset"><br><br></center>										
			</form>
<center>
<?php 
if ((isset ($_POST["Numero"])))
{		
$numero=$_POST["Numero"];	
	if (is_numeric ($numero)) 
{
	for ($t=1;$t<=10;$t++) 
{
	$valor=$t * $numero;
echo "$t * $numero = $valor <br>"; 
}
}
else
{
	echo "El valor tecleado NO es válido, por lo que NO se puede generar la tabla de multiplicar"; 	
} 
} 

?>
</center>
</font>
		</body>
</html>