<?php
	sleep(3);
	$conexion = new mysqli($ mysql -u usuario_mysql -p base_de_datos < archivo.sql) or ($conexion->error());
	$consulta = $conexion->query("UPDATE avion SET disponible = true");
	if($consulta)
		$exito = '{"exito":1}';
	else
		$exito = '{"exito":0}';

	$conexion->close();
	echo($exito);		
?>