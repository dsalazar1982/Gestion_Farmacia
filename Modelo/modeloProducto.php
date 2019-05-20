<?php
	require_once('modeloAbstractoDB.php');
	class Producto extends ModeloAbstractoDB {
		public $id_producto;
		public $nombre_producto;
		public $foto_producto;
		public $id_presentacion;
		public $id_farmacia;
		
		function __construct() {
		}
		
		public function getId_producto(){
			return $this->id_producto;
		}

		public function getNombre_producto(){
			return $this->nombre_producto;
		}

		public function getFoto_producto(){
			return $this->foto_producto;
		}
		
		public function getId_presentacion(){
			return $this->id_presentacion;
		}

		public function getId_farmacia(){
			return $this->id_farmacia;
		}

		public function consultar($id_producto='') {
			if($id_producto != ''):
				$this->query = "
				SELECT id_producto, nombre_prodcuto, foto_producto,
				id_presentacion, id_farmacia 
				FROM tb_productos
				WHERE id_producto = '$id_producto'
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
			SELECT id_producto, nombre_prodcuto, foto_producto,
			a.nombre_presentacion, b.nombre_farmacia 
            FROM tb_productos As pb
            INNER JOIN tb_presentaciones AS a ON (pb.id_presentacion = a.id_presentacion) 
		    INNER JOIN tb_farmacias AS b ON (pb.id_farmacia  = b.id_farmacia)
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_producto', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$id_producto= utf8_decode($id_producto);
                $nombre_producto= utf8_decode($nombre_producto);
                $foto_producto= utf8_decode($foto_producto);
                $id_presentacion= utf8_decode($id_presentacion);
                $id_farmacia= utf8_decode($id_farmacia);
				$this->query = "
				INSERT INTO tb_productos
				(id_producto, nombre_prodcuto, foto_producto,
                id_presentacion, id_farmacia)
				VALUES
				('$id_producto', '$nombre_producto', '$foto_producto',
				'$id_presentacion', '$id_farmacia')
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
			UPDATE tb_productos
            SET nombre_prodcuto='$nombre_producto', foto_producto='$foto_producto', 
            id_presentacion='$id_presentacion', id_farmacia='$id_farmacia'
			WHERE id_producto = '$id_producto'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_producto='') {
			$this->query = "
			DELETE FROM tb_productos
			WHERE id_producto = '$id_producto'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
		}
	}
?>