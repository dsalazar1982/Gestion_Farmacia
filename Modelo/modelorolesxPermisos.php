<?php
    require_once("modeloAbstractoDB.php");
	
    class Rolxpermiso extends ModeloAbstractoDB {
		private $id_rolxpermiso;
        private $id_rol;
        private $modulo_rolxpermiso;
        private $estado_rolxpermiso;
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_rolxpermiso(){
			return $this->id_rolxpermiso;
		}

		public function getId_rol(){
			return $this->id_rol;
		}

        public function getModulo_rolxpermiso(){
			return $this->modulo_rolxpermiso;
        }
        
        public function getEstado_rolxpermiso(){
			return $this->estado_rolxpermiso;
		}

		public function consultar($id_rol='') {
			if($id_rol !=''):
				$this->query = "
				SELECT id_rolxpermiso
				FROM tb_rolesxpermisos
				WHERE id_rol = '$id_rol' AND modulo_rolxpermiso = 1
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function listar($id_rol='') {
	   if($id_rol != ''){
			$this->query = "
			SELECT estado_rolxpermiso
			FROM tb_roles 
			WHERE id_rol = '$id_rol'
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
	   }	
		}
		public function nuevo($datos=array()) {
			if(array_key_exists('id_rol', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO tb_rolesxpermisos
					(id_rolxpermiso, id_rol, modulo_rolxpermiso, estado_rolxpermiso)
					VALUES
                    (NULL,'$id_rol','ciudades',0),(NULL,'$id_rol','clientes',0),(NULL,'$id_rol','facturas',0),
                    (NULL,'$id_rol','ventas',0),(NULL,'$id_rol','farmacias',0),(NULL,'$id_rol','inventario',0),
                    (NULL,'$id_rol','ofertas',0),(NULL,'$id_rol','nomina',0),(NULL,'$id_rol','paises',0),
                    (NULL,'$id_rol','productos',0),(NULL,'$id_rol','propietarios',0),(NULL,'$id_rol','proveedores',0),
                    (NULL,'$id_rol','usuarios',0),(NULL,'$id_rol','roles',0),(NULL,'$id_rol','carousel',0),
                    (NULL,'$id_rol','logs',0) 
					";
					$resultado = $this->ejecutar_query_simple();
					return $resultado;
			endif;
			
		}
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$cont = $id_rolxpermiso;
			for($i=1;$i<=16;$i++){
			if(isset ($_POST[''.$i.''])){	
			$this->query = "
			UPDATE tb_rolesxpermisos
			SET id_rol ='$id_rol',
			modulo_rolxpermiso = '$i',
			estado_rolxpermiso = 1
			WHERE id_rolxpermiso = '$cont'
			";
			$resultado = $this->ejecutar_query_simple();
			$cont++;
			}
			else{
				$this->query = "
				UPDATE tb_rolesxpermisos
				SET id_rol ='$id_rol',
				modulo_rolxpermiso = '$i',
				estado_rolxpermiso = 0
				WHERE id_rolxpermiso = '$cont'
				";
				$resultado = $this->ejecutar_query_simple();
				$cont++;
			}
			}
			$cont=0;
			return $resultado;
		}
		
		public function borrar($id_rol='') {
			$this->query = "
			DELETE FROM tb_rolesxpermisos
			WHERE id_rol = '$id_rol'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>