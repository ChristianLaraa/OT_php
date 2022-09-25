<html>
	<head>
		<title>
		Ejemplo for
		</title>
	</head>
	<body bgcolor= "07342E">
				<center>
		<marquee direction= "right" bgcolor= "7AEE07">
			<font face="Comic Sans" color= "000000" size="5">
				</center>
<center>
	<b>Ejemplo de uso de for</b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "FFFFFF" size="4">
	<form method="get">
	<center>Introduce una frase: <input name= "Frase" size="40" type="text"></center><br><br>
	<center><input value="Mostrar Frase" type="submit">
										<input value="Borrar" type="reset"><br><br></center>										
			</form>
<center>
<?php 
$frase=$_GET["Frase"];

	for ($j =1; $j<=20; $j=$j+1)
	{
		echo "$j. $frase <br>";
	}

?>
</center>
</font>
		</body>
</html>