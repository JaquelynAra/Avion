<?php
	sleep(3);
	$asiento = $_POST['asiento'];
	$conexion = new mysqli($ mysql -u usuario_mysql -p base_de_datos < archivo.sql);
	$actualiza = $conexion->query("UPDATE avion SET disponible = false WHERE asiento = $asiento");
	if($actualiza)
		$exito = '{"exito":1,"asiento":'.$asiento.'}';
	else
		$exito = '{"exito":0}';
	$conexion->close();
	echo($exito);	 		
?>