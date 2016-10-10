<?php
/*  Tenga en cuenta que antes del include del config
	debe cargar la variable $sql 						*/

$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "bd_analizi";

$conexion= mysqli_connect ($servidor, $usuario, $clave ,$bd);
$resultado= $conexion->query($sql);

?>
