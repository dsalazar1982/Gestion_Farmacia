<?php
	require_once('modeloAbstractoDB.php');
	class Farmacia extends ModeloAbstractoDB {
		public $id_farmacia;
		public $nombre_farmacia;
		public $direccion_farmacia;
		public $telefono_farmacia;
		public $id_ciudad;
		public $id_propietario;
		public $id_usuario;
		
		function __construct() {
		}
		
		public function getId_farmacia(){
			return $this->id_farmacia;
		}

		public function getNombre_farmacia(){
			return $this->nombre_farmacia;
		}

		public function getDireccion_farmacia(){
			return $this->direccion_farmacia;
		}
		
		public function getTelefono_farmacia(){
			return $this->telefono_farmacia;
		}

		public function getId_ciudad(){
			return $this->id_ciudad;
		}

		public function getId_propietario(){
			return $this->id_propietario;
		}

		public function getId_usuario(){
			return $this->id_usuario;
		}

		public function consultar($id_farmacia='') {
			if($id_farmacia != ''):
				$this->query = "
				SELECT id_farmacia, nombre_farmacia, direccion_farmacia,
				telefono_farmacia, id_ciudad, id_propietario,
				id_usuario 
				FROM tb_farmacias
				WHERE id_farmacia = '$id_farmacia'
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
			SELECT id_farmacia, nombre_farmacia, direccion_farmacia,
			telefono_farmacia, id_ciudad, id_propietario, id_usuario 
			FROM tb_farmacias ORDER BY nombre_farmacia
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		public function listafarmacia() {
			$this->query = "
			SELECT id_farmacia, nombre_farmacia, direccion_farmacia,
			telefono_farmacia, id_ciudad, id_propietario, id_usuario 
			FROM tb_farmacias as d order by nombre_farmacia
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_farmacia', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$id_farmacia= utf8_decode($id_farmacia);
				$nombre_farmacia= utf8_decode($nombre_farmacia);
				$this->query = "
				INSERT INTO tb_farmacias
				(id_farmacia, nombre_farmacia, direccion_farmacia,
                telefono_farmacia, id_ciudad, id_propietario, id_usuario)
				VALUES
				('$id_farmacia', '$nombre_farmacia', '$direccion_farmacia',
				'$telefono_farmacia', '$id_ciudad', '$id_propietario',
				'$id_usuario')
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
			UPDATE tb_farmacias
            SET nombre_farmacia='$nombre_farmacia', direccion_farmacia='$direccion_farmacia', 
            telefono_farmacia='$telefono_farmacia', id_ciudad='$id_ciudad', 
            id_propietario='$id_propietario', id_usuario='$id_usuario'
			WHERE id_farmacia = '$id_farmacia'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_farmacia='') {
			$this->query = "
			DELETE FROM tb_farmacias
			WHERE id_farmacia = '$id_farmacia'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
		}
	}
?>