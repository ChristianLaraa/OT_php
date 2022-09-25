<html>
	<head>
		<title>
		Uso if-elseif
		</title>
	</head>
	<body bgcolor= "DDD11F">
				<center>
		<marquee direction= "right" bgcolor= "000000">
			<font face="Comic Sans" color= "FFFFFF" size="5">
				</center>
<center>
	<b>Ejemplo de uso de if-elseif </b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "000000" size="4">
	<form method="post">
	<center>Número Entero <input name= "Numero" size="5" type="text"></center><br><br>
	<center><input value="Enviar" type="submit">
										<input value="Borrar" type="reset"><br><br></center>										
			</form>

<?php
$numero = $_POST["Numero"];
   echo "<center>El valor de la variable es:<b>$numero</b><br></center>";

   if($numero > 0)
 {
             echo "<center>Por lo tanto <b>es positivo</b><br></center>";
 }
 elseif($numero < 0)
 {
         echo "<center>Por lo tanto es <b>es negativo</b><br></center>";
 }
else
{
   echo "<center>Por lo tanto es <b>es cero</b></center>";
}

?>


</font>
		</body>
</html>