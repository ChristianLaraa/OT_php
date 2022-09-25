<html>
	<head>
		<title>
		Area Circulo
		</title>
	</head>
	<body bgcolor= "1FDDD7">
				<center>
		<marquee direction= "right" bgcolor= "000000">
			<font face="Comic Sans" color= "FFFFFF" size="5">
				</center>
<center>
	<b>Área de un circulo </b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "000000" size="4">
	<form method="get">
	<center>Radio de un circulo <input name= "Radio" size="5" type="text"></center><br><br>
	<center><input value="Calcular Área" type="submit">
										<input value="Borrar" type="reset"><br><br></center>										
			</form>
<center>
<?php

define("Pi", 3.1416);
if(isset($_GET["Radio"])){
	$radio=$_GET["Radio"];
	if(is_numeric($radio)){
		$calculo=Pi*($radio)*($radio);
		echo "Area del circulo: $calculo cm^2";
	}
else{
	echo "<b>Radio no valido</b> por lo tanto no se pude calcular el área";
}
}




 ?>
</center>
</font>
		</body>
</html>