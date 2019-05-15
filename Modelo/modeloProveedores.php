<?php
	require_once('modeloAbstractoDB.php');
	class Proveedor extends ModeloAbstractoDB {
		public $id_proveedor;
		public $nombre_proveedor;
		public $direccion_proveedor;
		public $telefono_proveedor;
		public $id_pais;
		public $id_ciudad;
		
		function __construct() {
		}
		
		public function getId_proveedor(){
			return $this->id_proveedor;
		}

		public function getNombre_proveedor(){
			return $this->nombre_proveedor;
		}

		public function getDireccion_proveedor(){
			return $this->direccion_proveedor;
		}

		public function getTelefono_proveedor(){
			return $this->telefono_proveedor;
		}

		public function getId_ciudad(){
			return $this->id_ciudad;
		}
		
		public function getId_pais(){
			return $this->id_pais;
		}

		


		
		public function consultar($id_proveedor='') {
			if($id_proveedor != ''):
				$this->query = "
				SELECT id_proveedor, nombre_proveedor, direccion_proveedor, telefono_proveedor, nombre_pais, nombre_ciudad
				FROM tb_proveedores
				INNER JOIN tb_paises ON tb_proveedores.id_pais=tb_paises.id_pais
				INNER JOIN tb_ciudades ON tb_proveedores.id_ciudad=tb_ciudades.id_ciudad
				WHERE id_proveedor = '$id_proveedor'
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
			SELECT id_proveedor, nombre_proveedor, direccion_proveedor, telefono_proveedor, nombre_pais, nombre_ciudad
			FROM tb_proveedores
			INNER JOIN tb_paises ON tb_proveedores.id_pais=tb_paises.id_pais
			INNER JOIN tb_ciudades ON tb_proveedores.id_ciudad=tb_ciudades.id_ciudad
			order by nombre_proveedor
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		public function listaPais() {
			$this->query = "
			SELECT id_proveedor, nombre_proveedor, direccion_proveedor, telefono_proveedor, nombre_pais, nombre_ciudad
			FROM tb_proveedores
			INNER JOIN tb_paises ON tb_proveedores.id_pais=tb_paises.id_pais
			INNER JOIN tb_ciudades ON tb_proveedores.id_ciudad=tb_ciudades.id_ciudad
			order by nombre_proveedor
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
				(id_pais, nombre_pais, abreviatura_pais)
				VALUES
				('$id_pais', '$nombre_pais', '$abreviatura_pais')
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
			SET nombre_pais='$nombre_pais', abreviatura_pais='$abreviatura_pais'
			WHERE id_pais = '$id_pais'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_proveedor='') {
			$this->query = "
			DELETE FROM tb_proveedores
WHERE id_proveedor = '$id_proveedor'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
		}
	}
?>