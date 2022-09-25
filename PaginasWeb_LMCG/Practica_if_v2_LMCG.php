<html>
	<head>
		<title>
		Clasificación
		</title>
	</head>
	<body bgcolor= "0C30E5">
				<center>
		<marquee direction= "right" bgcolor= "05F0D0">
			<font face="Comic Sans" color= "000000" size="5">
				</center>
<center>
	<b>Clasificación segun Edad</b>
		</marquee><br><br><br>
</center>
	</font>
	<font face="Rockwell" color= "FFFFFF" size="4">
	<form method="post">
	<center>Nombre de la persona <input name= "Nombre" size="30" type="text"></center><br><br>
	<center>Año de nacimiento <input name= "Nacimiento" size="5" type="text"></center><br><br>
	<center><input value="Clasificar" type="submit">
										<input value="Borrar" type="reset"><br><br></center>										
			</form>
<center>
<?php

if((isset($_POST["Nombre"])) && (isset($_POST["Nacimiento"]))){
                    $nombre = $_POST["Nombre"];
                    $nacimiento = $_POST["Nacimiento"];

                    if(is_numeric($nacimiento)){
                        if(2022 - $nacimiento < 13){
                            echo "$nombre Eres un niño";
                        }
                        elseif((2022 - $nacimiento >=13) && (2022 - $nacimiento < 18) ){
                            echo "$nombre Eres adolecente";
                        }
                        elseif((2022 - $nacimiento  >= 18 ) && (2022 - $nacimiento < 40)){
                            echo "$nombre Eres un adulto";
                        }
                        else{
                            echo "$nombre Eres un adulto mayor";
                        }
                    }else{
                        echo "Fecha no valida";
                    }
                }

?>
</center>
</font>
		</body>
</html>