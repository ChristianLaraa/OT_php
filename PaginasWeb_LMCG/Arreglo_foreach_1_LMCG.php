<html>
	<head>
		<title>
		foreach valor.
		</title>
	</head>
	<body bgcolor= "016C69">
				<center>
		<marquee direction= "right" bgcolor= "F3824D">
			<font face="Comic Sans" color= "000000" size="5">
				</center>
<center>
	<b>Muestra de valores de arreglos</b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "FFFFFF" size="4">										
<center>
<?php
$tienda ['niños']="Pantalón";
$tienda ['damas']="Blusa";
$tienda ['caballeros']="Camisa";
$tienda ['bebes']="Mameluco";

foreach ($tienda as $valor ) 
{
echo "$valor<br>"; 
}
echo "<br><br>";
$lineablanca [0]="Refrigerador";
$lineablanca [1]="Estufa";
$lineablanca [2]="MicroOndas";

foreach ($lineablanca as $valorlinea)
{
echo "$valorlinea<br>";
}
?>

</center>
</font>
		</body>
</html>