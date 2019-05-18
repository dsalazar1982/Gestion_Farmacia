<?php
    require_once("modeloAbstractoDB.php");
	
    class Usuarioxempleado extends ModeloAbstractoDB {
		private $id_usuarioxempleado;
		private $id_empleado;
		private $id_usuario;
		
		function __construct() {
			//$this->db_name = '';
		}

		public function getId_usuarioxempleado(){
			return $this->id_usuarioxempleado;
		}

		public function getId_empleado(){
			return $this->id_empleado;
		}
		
		public function getId_usuario(){
			return $this->id_usuario;
		}

		public function consultar($id_usuario='') {
			if($id_usuario !=''):
				$this->query = "
				SELECT id_usuarioxempleado, id_empleado
				FROM tb_usuarioxempleado
				WHERE id_usuario = '$id_usuario'
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
			SELECT comu_codi, comu_nomb, m.muni_nomb
			FROM tb_comuna as c inner join tb_municipio as m
			ON (c.muni_codi = m.muni_codi) order by comu_codi
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($id_empleado='',$id_usuario='') {
			
				$this->query = "
					INSERT INTO tb_usuarioxempleado
					(id_usuarioxempleado, id_empleado, id_usuario)
					VALUES
					(NULL, '$id_empleado', '$id_usuario')
					";
					$resultado = $this->ejecutar_query_simple();
					return $resultado;
	
			
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE tb_comuna
			SET comu_nomb ='$comu_nomb',
			muni_codi ='$muni_codi',
			update_at = NOW()
			WHERE comu_codi = '$comu_codi'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($comu_codi='') {
			$this->query = "
			DELETE FROM tb_comuna
			WHERE comu_codi = '$comu_codi'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
			//unset($this);
		}
	}
?>