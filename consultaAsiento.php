<?php
sleep(3);
$conexion = new mysqli($ mysql -u usuario_mysql -p base_de_datos < archivo.sql);
$estado = $conexion->query("SELECT * FROM avion") or die("Error");
$cadena = "[{";
for($i=0;$i<=11;$i++){
	$mEstado = $estado->fetch_array();
	$cadena .= '"a'.$mEstado[0].'":'.$mEstado[1];
	if($i != 11){
		$cadena .= ',';
	}
}
$cadena .= "}]";
$conexion->close();
echo $cadena;
?>