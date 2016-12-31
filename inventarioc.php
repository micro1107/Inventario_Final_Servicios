<?php
$con=mysqli_connect("localhost","root","","inventario");
if(mysqli_connect_errno())
	{
	echo "Error en la conexion de la base de datos".mysqli_connect_errno();
	}
	$query="select * from articulos where nombre like"."'".$_POST["nombre"]."%"."'";
	$result = mysqli_query($con,$query);
	echo "Codigo","---", "Nombre", "----", "Descripcion", "----", "Estado", "----", "Cantidad" , "<br>";
	while ($row = mysqli_fetch_array($result))
	{
	echo $row['codigo'], "----", $row['nombre'], "----", $row['descripcion'], "----",$row['estado'], "----",$row['cantidad'];
	echo "<br>";
 	}
	mysqli_close($con);
?>