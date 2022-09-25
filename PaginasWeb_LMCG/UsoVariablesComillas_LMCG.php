<html>
	<head>
		<title>
		Variables Comillas
		</title>
	</head>
	<body bgcolor= "B2D6B0">
				<center>
<br>
		<marquee direction= "right" bgcolor= "51B5EE" width="50%">
			<font face="Comic Sans" color= "000000" size="5">
				</center>
<center>
	<b>Variables y Comillas</b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Comic Sans" color= "000000" size="4">
	<center>
	<?php
	$platillo1="Pozole";
	$platillo2="Cochinita Pibil";
	$platillo3="Chiles en Nogada";
	echo 'Mis platillos favoritos son: $platillo1, $platillo2, $platillo3<br><br>';
	/*Con comillas simples ('')La línea de codigo no se visualiza de buena forma en especifico en las variables, ya que no las imprime como el dato almacenado sino que lo muestra como texto*/
	echo "Mis platillos favoritos son: $platillo1, $platillo2, $platillo3<br><br><br>";
	/*Con comillas dobles ("")La linea de codigo compila bien, a las variables si las identifica como el dato almacenado de esta forma las imprime bien*/
	echo $platillo2;
	/*Sin comillas echo logra identificar la variable bien, como un dato que fue almacenado*/
	
	
	
	?>
</center>
	</font>
		</body>
				</html>