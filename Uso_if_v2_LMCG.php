<html>
	<head>
		<title>
		Uso if-else
		</title>
	</head>
	<body bgcolor= "3FD367">
				<center>
		<marquee direction= "right" bgcolor= "000000">
			<font face="Comic Sans" color= "FFFFFF" size="5">
				</center>
<center>
	<b>Ejemplo de uso de if-else </b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "000000" size="4">
	<form method="post">
	<center>Inasistencias del alumno <input name= "Faltas" size="5" type="text"></center><br><br>
		<center>Calificación Final del alumno <input name= "C_Final" size="5" type="text"></center><br><br>
	<center><input value="Enviar" type="submit">
										<input value="Borrar" type="reset"><br><br></center>										
			</form>
<?php
	$inasistencias = $_POST["Faltas"]; 
	$calif_Final = $_POST["C_Final"];
	echo "<center>Las inasistencias son: <b> $inasistencias </b> <br></center>";
	echo "<center>La Calificación final es: <b> $calif_Final </b></center> <br>"; 
	if  ($inasistencias>2 || $calif_Final < 6) 
	{
    echo "<center>Como se tiene más de dos inasistencias o la calificación final es reprobatoria <b> el alumno
	reprueba </b></center> <br>"; 
	 }
else
	 {
    echo "<center>Como no se superan dos inasistencias y la calificación final es aprobatoria <b> el alumno aprueba </b></center> <br>"; 
	 }
	?>
</font>
		</body>
</html>