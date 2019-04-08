<?php
	require_once("BD.php");

	class Usuario extends BD {

		private $bd;
		public $id;
		public $nombre;
		private $tabla = 'estudiantes';

		public function all() {
			$conexion = parent::conectar();
			try {
				$query = "SELECT * from usuarios";
				return $usuarios = $conexion->query($query)->fetchAll();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function registrar($datos) {
			$conexion = parent::conectar();
			try {
				$query = "INSERT INTO usuarios SET nombre=:nombre";
				$registro = $conexion->prepare($query)->execute($datos);
				return true;
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function ver($id) {
			$conexion = parent::conectar();
			try {
				$query = "SELECT * FROM usuarios WHERE id=:id";
				$select = $conexion->prepare($query);
				$select->bindValue('id',$id);
				$select->execute();
				return $usuarioDb = $select->fetch();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function editar($datos) {
			$conexion = parent::conectar();
			try {
				$query = "UPDATE usuarios SET nombre=:nombre WHERE id=:id;";
				$editar = $conexion->prepare($query)->execute($datos);
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function eliminar($id) {
			$conexion = parent::conectar();
			try {
				$query = "DELETE FROM usuarios WHERE id=:id";
				$select = $conexion->prepare($query);
				$select->bindValue('id',$id);
				$select->execute();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}
	}
?>