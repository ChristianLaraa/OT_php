<html>
	<head>
		<title>
		Uso if
		</title>
	</head>
	<body bgcolor= "E06A4A">
				<center>
		<marquee direction= "right" bgcolor= "000000">
			<font face="Comic Sans" color= "FFFFFF" size="5">
				</center>
<center>
	<b>Ejemplo de uso de if </b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "000000" size="4">
	<form method="get" <br>
	<center>Número Entero <input name= "Numero" size="5" type="text"></center><br><br>
	<center><input value="Enviar" type="submit">
										<input value="Borrar" type="reset"><br><br></center>										
			</form>
<?php
$numero=$_GET["Numero"];
	$positivo="Un número positivo";
$valor="El valor de la variable 'numero' es: ";
$textVariable="Por lo tanto lo que contiene la variable es: ";
$negativo="El número es negativo";
if($numero>0){
	
	echo "<center>$valor<b>$numero</b></center><br>";
	echo "<center>$textVariable <b>$positivo</b></center><br>";
	
}
elseif($numero){
	echo "<center>$negativo<br></center>";
	echo "<center>$valor <b> $numero</b><br></center>";
}

?>
	</font>
		</body>
</html>