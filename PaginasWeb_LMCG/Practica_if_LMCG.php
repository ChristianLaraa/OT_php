<html>
	<head>
		<title>
		Mayor Menor
		</title>
	</head>
	<body bgcolor= "F66B0A">
				<center>
		<marquee direction= "right" bgcolor= "7C7875">
			<font face="Comic Sans" color= "FFFFFF" size="5">
				</center>
<center>
	<b>Mayor o Menor de Edad</b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "000000" size="4">
	<form method="get">
	<center>Edad de una persona <input name= "Edad" size="5" type="text"></center><br><br>
	<center><input value="¿Mayor o Menor?" type="submit">
										<input value="Borrar" type="reset"><br><br></center>										
			</form>
<center>
<?php
 if(isset($_GET["Edad"])){
    $edad = $_GET["Edad"];
  if(is_numeric($edad)){
      if($edad >= 18){
   echo "Es mayor de edad: $edad";
    }
else{
     echo "Es menor de edad: $edad";
    }
   }
	else{
   echo "Edad NO válida";
   }
   }

?>
</center>
</font>
		</body>
</html>