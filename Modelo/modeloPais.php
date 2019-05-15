<?php
	require_once('modeloAbstractoDB.php');
	class Pais extends ModeloAbstractoDB {
		public $id_pais;
		public $nombre_pais;
		
		function __construct() {
		}
		
		public function getId_pais(){
			return $this->id_pais;
		}

		public function getNombre_pais(){
			return $this->nombre_pais;
		}
		
		public function consultar($id_pais='') {
			if($id_pais != ''):
				$this->query = "
				SELECT id_pais, nombre_pais
				FROM tb_paises
				WHERE id_pais = '$id_pais'
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function listar() {
			$this->query = "
			SELECT id_pais, nombre_pais
			FROM tb_paises ORDER BY nombre_pais
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		public function listaPais() {
			$this->query = "
			SELECT id_pais, nombre_pais
			FROM tb_paises as d order by nombre_pais
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_pais', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$id_pais= utf8_decode($id_pais);
				$nombre_pais= utf8_decode($nombre_pais);
				$this->query = "
				INSERT INTO tb_paises
				(id_pais, nombre_pais)
				VALUES
				('$id_pais', '$nombre_pais')
				";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_paises
			SET nombre_pais='$nombre_pais'
			WHERE id_pais = '$id_pais'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_pais='') {
			$this->query = "
			DELETE FROM tb_paises
			WHERE id_pais = '$id_pais'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
		}
	}
?>