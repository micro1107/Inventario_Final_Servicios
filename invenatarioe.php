<?php
$con=mysqli_connect("localhost","root","","biblioteca");
if(mysqli_connect_errno())
	{
	echo "Error en la conexion de la base de datos".mysqli_connect_errno();
	}
	$identificador = $_POST["identificador"];
	$titulo = $_POST["titulo"];
	$autor = $_POST["autor"];
	$anio = $_POST["anio"];
 	$query="insert into libros values";
 	$values= $query . "(". "'".$identificador."'". "," ."'". $titulo."'". ","."'". $autor."'".",". $anio.")";
 	mysqli_query($con,$values);
 	echo "Se insertaron los datos: Identificador:". $identificador. ", ". "Título:". $titulo. "," . "Autor:".$autor. ", " ."Año:" . $anio;
	mysqli_close($con);
?>