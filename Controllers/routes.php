<?php
	require_once('controller.php');
	$adress = new Controller();
	if (isset($_GET['to'])) {
		switch ($_GET['to']) {
			case 'home':
				$adress->index();
				break;

			case 'registrar':
				$adress->registrar();
				break;

			case 'ver':
				$adress->ver();
				break;

			case 'editar':
				$adress->editar();
				break;

			case 'eliminar':
				$adress->eliminar();
				break;
			
			default:
				$adress->index();
				break;
		}
	} else {
		$adress->index();
	}
?>