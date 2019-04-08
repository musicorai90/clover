<?php
	const DB = 'mysql';
   	const DB_SERVIDOR = 'localhost';
   	const DB_CHARSET = 'utf8';

	abstract class BD {
		private static $db_usuario = 'root';
		private static $db_pass = '';
		private static $db_servidor = DB_SERVIDOR;
		private static $db_nombre = 'clover';
		private static $db_charset = DB_CHARSET;
		private $conexion;

		public function conectar() {
			try {
				$dsn = "mysql:host=".self::$db_servidor.";dbname=".self::$db_nombre;
				$pdo = new PDO($dsn, self::$db_usuario, self::$db_pass);
				$pdo->exec("SET CHARACTER SET ".self::$db_charset);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				return $pdo;
			} catch (PDOException $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}
		private function desconectar() {
			$this->conexion = null;
		}

		abstract protected function all();
		abstract protected function registrar($datos);
		abstract protected function ver($id);
		abstract protected function editar($datos);
		abstract protected function eliminar($id);
	}
?>