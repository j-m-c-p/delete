<?php
$id=$_GET['id'];
$sql="delete from tb_usuario where documento='$id'";
//echo $sql;
include('config.php');
if ($conexion-> affected_rows >0){
	echo "ya borre";
	echo "<script>location.href='eliminar_usuario.php'</script>";

}

?>
