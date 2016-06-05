<?php

 $con = mysql_connect("localhost", "root", "") or
   die('Não foi possível conectar');

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
