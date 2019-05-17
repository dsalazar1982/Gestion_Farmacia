<?php
    require_once("modeloAbstractoDB.php");
	
    class Usuario extends ModeloAbstractoDB {
		private $id_usuario;
		private $nickname_usuario;
        private $clave_usuario;
        private $id_estado;
        private $id_rol;
        private $fechacreacion_usuario;
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_usuario(){
			return $this->id_usuario;
		}

		public function getNickname_usuario(){
			return $this->nickname_usuario;
		}
		
		public function getClave_usuario(){
			return $this->clave_usuario;
        }
        
        public function getId_estado(){
			return $this->id_estado;
        }

        public function getId_rol(){
			return $this->id_rol;
        }

        public function getFechacreacion_usuario(){
			return $this->fechacreacion_usuario;
        }

		public function consultar($id_usuario='') {
			if($id_usuario !=''):
				$this->query = "
                SELECT id_usuario, nickname_usuario, clave_usuario, id_estado, id_rol, fechacreacion_usaurio 
                FROM tb_usuarios 
                WHERE = '$id_usuario'
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
            SELECT u.id_usuario, u.nickname_usuario, u.clave_usuario, e.nombre_estado , r.nombre_rol, 
            u.fechacreacion_usaurio 
            FROM tb_usuarios u 
            INNER JOIN tb_estados e ON (u.id_estado = e.id_estado) 
            INNER JOIN tb_roles r ON (u.id_rol = r.id_rol);
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_usuario', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_usuarios
					(id_usuario, nickname_usuario, clave_usuario, id_estado, id_rol, fechacreacion_usuario)
					VALUES
					(NULL, '$nickname_usuario', '$clave_usuario','$id_estado','$id_rol',NOW())
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
			UPDATE tb_usuarios
			SET nickname_usuario ='$nickname_usuario',
            clave_usuario ='$clave_usuario',
            id_estado ='$id_estado',
            id_rol ='$id_rol',
			fechacreacion_usuario = NOW()
			WHERE id_usuario = '$id_usuario'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_usuario='') {
			$this->query = "
			DELETE FROM tb_usuario
			WHERE id_usuario = '$id_usuario'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>