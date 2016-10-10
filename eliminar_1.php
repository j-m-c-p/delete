<?php
$sql="select * from tb_personas";

include('config.php');
echo"<table border='2px'>
	<tr>
	   <td><strong>documento</strong></td>
	  <td><strong>nombre</strong></td>
	  <td><strong>apellido</strong></td>
	 <td><strong>fecha_nacimiento</strong></td>
	  <td><strong>celular</strong></td>
	  <td><strong>rh</strong></td>
	  
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
	
	  <td><a href='eliminar_1.php?id=$row[0]'>Eliminar</a></td>
	  </tr>";
}
echo"</table>";
?>
