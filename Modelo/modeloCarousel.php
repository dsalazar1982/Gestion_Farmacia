<?php
	require_once('modeloAbstractoDB.php');
	class Carousel extends ModeloAbstractoDB {
		public $id_carousel;
		public $imagen;
		

		function __construct() {
		}
		
		public function getId_carousel(){
			return $this->id_carousel;
		}

		public function getimagen(){
			return $this->imagen;
		}

		
		public function consultar($id_carousel='') {
			if($id_carousel != ''):
				$this->query = "
				SELECT id_carousel, imagen FROM tb_carousel
				WHERE id_carousel = '$id_carousel'
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
			SELECT id_carousel, imagen
			FROM tb_carousel
			ORDER BY id_carousel
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}

		public function nuevo($datos=array()) {
			if(array_key_exists('id_carousel', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$id_carousel= utf8_decode($id_carousel);
				$imagen= utf8_decode($imagen);
				$this->query = "
				INSERT INTO tb_carousel
				(id_carousel, imagen)
				VALUES
				('$id_carousel', '$imagen')
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
			UPDATE tb_carousel
			SET id_carousel='$id_carousel', imagen='$imagen' WHERE id_carousel = '$id_carousel'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_carousel='') {
			$this->query = "
			DELETE FROM tb_carousel
			WHERE id_carousel = '$id_carousel'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
		}
	}
?>