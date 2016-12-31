<?php
$decision = $_POST['operacion'];
switch ($decision) {
	
	case 'insertar':
		header("Location: http://localhost/inventario/inventarioi.html");
		exit;
		break;
	
	case 'modificar':
		header("Location: http://localhost/inventario/inventariom.html");
		exit;
		break;
	
	case 'consultar':
		header("Location: http://localhost/inventario/inventarioc.html");
		exit;
		break;

	case 'eliminar':
		header("Location: http://localhost/inventario/inventarioe.html");
		exit;
		break;

	
}
?>