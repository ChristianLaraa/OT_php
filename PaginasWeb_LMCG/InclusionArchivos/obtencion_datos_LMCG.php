<?php

include ("Encabezado_LMCG.html");

?>

<meta charset=utf-8>
	

		
	


<font face="Rockwell" color= "000000" size="4">

<?php 

$nombre=$_POST["nombre"];
$edad=$_POST["edad"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];


$datos['Nombre']="$nombre";
$datos['Edad']="$edad";
$datos['Dirección']="$direccion";
$datos['Telefono']="$telefono";

echo "<center>";
echo "<table bgcolor='FFED9A'>";
echo "<tr><th>";

foreach($datos as $valores => $datos)
{
echo "<b>$valores</b> : <i>$datos</i> <br>";

}
echo "</tr></th><br>";
echo "</table>";
echo "</center><br><br>";
?>


</font>			
</meta>
		</body>

<?php

include ("Pie_LMCG.html");

?>
