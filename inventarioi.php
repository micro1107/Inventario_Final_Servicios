<?php
$con=mysqli_connect("localhost","root","","inventario");
if(mysqli_connect_errno())
	{
	echo "Error en la conexion de la base de datos".mysqli_connect_errno();
	}
	$codigo = $_POST["codigo"];
	$nombre = $_POST["nombre"];
	$descripcion = $_POST["descripcion"];
	$estado = $_POST["estado"];
	$cantidad = $_POST["cantidad"];
 	$query="insert into articulos values";
 	$values= $query . "(". $codigo. "," ."'". $nombre."'". ","."'". $descripcion."'".","."'". $estado. "'".",".$cantidad.")";
 	mysqli_query($con,$values);
 	echo "Se insertaron los datos: Codigo:". $codigo. ", ". "Nombre:". $nombre. "," . "Descripcion:".$descripcion. ", " ."Estado:" . $estado. ", " . "Cantidad:" . $cantidad;
	mysqli_close($con);
?>