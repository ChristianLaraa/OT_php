<html>
	<head>
		<title>
		foreach valor.
		</title>
	</head>
	<body bgcolor= "6C1301">
				<center>
		<marquee direction= "right" bgcolor= "FAA13D">
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

	$tienda ['niños']="pantalón";
	$tienda ['damas']="blusa";
	$tienda ['caballeros']="camisa";
	$tienda ['bebes']="mameluco";
	
	foreach ($tienda as $Ropa ) 
		{
			echo "$Ropa<br>"; 
		}
	?>

</center>
</font>
		</body>
</html>