<?php 
	$solicitud = $_REQUEST['solicitud'];

	$conexion = mysqli_connect(
		"fdb1029.awardspace.net", 
		"4276003_empresa", 
		"Js123456789", 
		"4276003_empresa");

	$cadena = "select * from contacto";

	$informacion = array();

	$datos = mysqli_query($conexion, $cadena);

	while ($renglon = mysqli_fetch_array($datos)) {
		$contacto[] = array(
			"nombre" => $renglon[0],
			"carrera" => $renglon[1],
			"telefono" => $renglon[2],
			"correo" => $renglon[3],
			"poblado" => $renglon[4],
			"foto" => $renglon[5]);
	}

	$informacion["contactos"] = $contacto;

	print json_encode($informacion);

	mysqli_close($conexion);
?>