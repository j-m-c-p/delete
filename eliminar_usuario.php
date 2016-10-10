<?php
include('librerias.php');
$sql="select * from tb_usuario";

include('config.php');
echo"
<center><br><br>
 <table border='3px' class='table table-striped'>
	<tr>
	  <td><strong>documento</strong></td>
	  <td><strong>nombre</strong></td>
	  <td><strong>apellido</strong></td>
	  <td><strong>fecha_nacimiento</strong></td>
	  <td><strong>celular</strong></td>
	  <td><strong>rh</strong></td>
	  <td><strong>eliminar</strong></td>
	</center>
	</tr>";
	  

while($row = mysqli_fetch_row($resultado))
{
	echo"<tr>
	  <td>$row[0]</td>
	  <td>$row[1]</td>
	  <td>$row[2]</td>
	  <td>$row[3]</td>
	  <td>$row[4]</td> 
	  <td>$row[5]</td> 

	   
	  <td><a href='eliminar.php?id=$row[0]'class='btn btn-success'>Eliminar</a></td>
	  </tr>";
}
echo"</table>";
?>
<br><br>
  <td><a href='desktop.php 'class='btn btn-info'>volver</a></td>

