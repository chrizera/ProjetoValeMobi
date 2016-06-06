<?php

 $con = mysql_connect("localhost", "root", "") or
   die('Não foi possível conectar');
   
 $sql = "CREATE TABLE mercadorias (

	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	codMerc INT(8) NOT NULL,
	tipoMerc VARCHAR(255) NOT NULL,
 	nomeMerc VARCHAR(255) NOT NULL,
	quant INT(8) NOT NULL,
	preco FLOAT(8,2) NOT NULL,
	tipoNegocio VARCHAR(255) NOT NULL


)";

 $codMerc = $_POST['codMerc'];
 $tipoMerc = $_POST['tipoMerc'];
 $nomeMerc = $_POST['nomeMerc'];
 $quant = $_POST['quant'];
 $preco = $_POST['preco'];
 $tipoNegocio = $_POST['tipoNegocio'];

mysql_select_db("mercadorias", $con);
mysql_query("INSERT INTO mercadorias (codMerc, tipoMerc, nomeMerc, quant, preco, tipoNegocio) VALUES ('$codMerc', '$tipoMerc', '$nomeMerc', '$quant', '$preco', '$tipoNegocio');
mysql_close($con);

?>
