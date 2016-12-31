<?php
$con=mysqli_connect("localhost","root","","inventario");
if(mysqli_connect_errno())
	{
	echo "Error en la conexion de la base de datos".mysqli_connect_errno();
	}
    $codigo = $_POST["codigo"];
	$operacion = $_POST["operacion"];
	$cantidad = $_POST["cantidad"];
	$query="select cantidad from articulos where codigo = " . $codigo;
 	$result=mysqli_query($con,$query);
 	while ($row = mysqli_fetch_array($result))
	{
	$cantidadV = $row['cantidad'];
 	}
    switch ($operacion) {
	case 'anadir':
		$cantidadM = $cantidad + $cantidadV;
        $queryA="update articulos set cantidad = ". $cantidadM . " where codigo = " . $codigo; 
        mysqli_query($con,$queryA);
        mysqli_close($con);
 		echo "Se añadieron existencias al articulo: Codigo:". $codigo. "Cantidad nueva:" . $cantidadM;
		exit;
		break;
 	case 'restar':
 	    $cantidadR = $cantidadV - $cantidad;
 		$queryA="update articulos set cantidad = ". $cantidadR . " where codigo = " . $codigo; 
 		mysqli_query($con,$queryA);
 		mysqli_close($con);
 		echo "Se eliminaron restaron existencias al articulo : Codigo:". $codigo. "Cantidad nueva:" .$cantidadR;
		exit;
		break;
	
}
	
?>