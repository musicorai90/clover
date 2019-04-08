<?php
	include_once('Models/models.php');
	class Controller {
		public function index() {
			$usuarios = Usuario::all();
			include_once('Views/home.php');	
		}

		public function registrar() {
			if (isset($_GET['registrar'])) {
				$datos = [
					'nombre' => $_POST['nombre']
				];
				$usuario = new Usuario();
				$usuario->registrar($datos);
				header('Location: index.php');
			} else {
				include_once('Views/registrar.php');
			}
		}

		public function ver() {
			$usuario = Usuario::ver($_GET['id']);
			include_once('Views/ver.php');
		}

		public function editar() {
			if (isset($_GET['editar'])) {
				$datos = [
					'id' => $_POST['id'],
					'nombre' => $_POST['nombre']
				];
				$usuario = new Usuario();
				$usuario->editar($datos);
				header('Location: index.php');
			} else {
				$usuario = Usuario::ver($_GET['id']);
				include_once('Views/editar.php');
			}
		}

		public function eliminar() {
			Usuario::eliminar($_GET['id']);
			header('Location: index.php');
		}
	}
?>