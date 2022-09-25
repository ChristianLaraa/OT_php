<html>
	<head>
		<title>
		Arreglo Alimentos
		</title>
	</head>
	<body bgcolor= "0B1A47">
				<center>
		<marquee direction= "right" bgcolor= "EBF34D">
			<font face="Comic Sans" color= "000000" size="5">
				</center>
<center>
	<b>Alimentos del día </b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "FFFFFF" size="4">										
<center>
<?php

$alimento ['Desayuno:']="Omelet con tocino y queso";
	$alimento ['Colación 1: ']="Coctel de Frutas";
		$alimento ['Comida: ']="Mole de olla";
			$alimento ['Colación 2: ']="Dedos de queso con aderezo";
				$alimento ['Cena: ']="Arroz con leche y Rosca";
						echo "<table width= '320' heigth='45' border='2' bordercolor='000000' bgcolor='red'>";
							echo "<tr><th align='center' bgcolor='F4DB3E'>Tipo de Alimentación</th><td align='center' bgcolor='F4DB3E'><b>Menú</b></th></tr>";
foreach ($alimento as $alimentos => $menu)
{
	echo "<tr><td align='center' bgcolor='3EF4E6'>$alimentos</td> <td align='center' bgcolor='65F43E'> $menu</td></tr>";
	
}

echo "</table>";




?>
</center>
</font>
		</body>
</html>