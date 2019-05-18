<?php
    require_once("../modeloAbstractoDB.php");
    class Farmacia extends ModeloAbstractoDB {
		private $id_farmacia;
		private $nombre_farmacia;
		private $direccion_farmacia;
		private $telefono_farmacia;
        private $id_ciudad;
        private $id_propietario;
        private $id_usuario; 
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getid_farmacia(){
			return $this->id_farmacia;
		}

		public function getnombre_farmacia(){
			return $this->nombre_farmacia;
		}

		public function getdireccion_farmacia(){
			return $this->direccion_farmacia;
		}

		public function gettelefono_farmacia(){
			return $this->telefono_farmacia;
		}

		public function getid_ciudad(){
			return $this->id_ciudad;
        }
        
        public function getid_propietario(){
			return $this->id_propietario;
        }
        
        public function getid_usuario(){
			return $this->id_usuario;
		}
		
		public function consultar($id_farmacia='') {
			if($id_farmacia !=''):
				$this->query = "
                SELECT id_farmacia, nombre_farmacia, direccion_farmacia, telefono_farmacia, id_ciudad,
                id_propietario,id_usuario
				FROM tb_farmacias
				WHERE id_farmacia = '$id_farmacia' order by id_farmacia
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function lista() {
			$this->query = "
            SELECT f.id_farmacia, f.nombre_farmacia, f.direccion_farmacia, 
            f.telefono_farmacia, c.nombre_ciudad, p.nombre_propietario FROM tb_farmacias as f,
             tb_ciudades as c, tb_propietarios as p WHERE (c.id_ciudad=f.id_ciudad) 
             AND (p.id_propietario=f.id_propietario)
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_farmacia', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$nombre_farmacia= utf8_decode($nombre_farmacia);
				$this->query = "
					INSERT INTO tb_farmacia
					(id_farmacia, nombre_farmacia, direccion_farmacia, 
                    telefono_farmacia,nombre_ciudad, nombre_propietario)
					VALUES
                    (NULL, '$id_farmacia', '$nombre_farmacia', '$direccion_farmacia', '$telefono_farmacia',
                    '$id_ciudad','$id_propietario','$id_usuario')
					";
				$resultado = $this->ejecutar_query_simple();
				return $resultado;
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$nombre_farmacia= utf8_decode($nombre_farmacia);
			$direccion_farmacia= ($direccion_farmacia);
			$telefono_farmacia= ($telefono_farmacia);
			$this->query = "
			UPDATE tb_farmacia
			SET nombre_farmacia='$nombre_farmacia', direccion_farmacia='$direccion_famarcia', telefono_farmacia='$telefono_farmacia',
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
			//unset($this);
		}
	} //<!-- codigo listo, funcionando -->
?>