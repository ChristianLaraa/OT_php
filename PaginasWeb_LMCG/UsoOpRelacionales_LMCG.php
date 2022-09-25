<html>
	<head>
		<title>
		Operadores Relacionales
		</title>
	</head>
	<body bgcolor= "AEDDEA">
				<center>
		<marquee direction= "right" bgcolor= "131FD6">
			<font face="Comic Sans" color= "FFFFFF" size="5">
				</center>
<center>
	<b>Uso de Variables y Operadores Relacionales</b>
		</marquee><br><br>
</center>
	</font>
	<font face="Comic Sans" color= "000000" size="5">
	<center>
	<?php
	$a=10;
	$b=20;
	$c=30;
	/*Mayor que*/
	echo "$a es mayor que $b?";
		echo $a>$b;
			echo "<br><br>";
	/*Igualdad*/
	echo "$a es igual a $b?";
		echo $a==$b;
		echo "<br><br>";
	/*Menor que*/
	echo "$a es menor que $b<br>";
		echo $a<$b;
		echo "<br><br>";
	/*Mayor o igual que*/
	echo "$c es mayor o igual a $b?<br>";
		echo $c>=$b;
			echo "<br><br>";
	/*Menor o igual que*/
	echo "$c es menor o igual que $b?";
		echo $c<=$b;
			echo "<br><br>";
	/*Desigualdad*/
	echo "$c es diferente a $b?<br>";
		echo $c!=$b;
			echo "<br><br>";
	
	?>
	</font>
	</center>
		</body>
				</html>