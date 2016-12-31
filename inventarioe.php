<?php
$con=mysqli_connect("localhost","root","","inventario");
if(mysqli_connect_errno())
	{
	echo "Error en la conexion de la base de datos".mysqli_connect_errno();
	}
	$query="delete from articulos where codigo =" .$_POST["codigo"] ;
	$result = mysqli_query($con,$query);
	echo "Se eliminó el artículo con código:".$_POST["codigo"];
	mysqli_close($con);
?>