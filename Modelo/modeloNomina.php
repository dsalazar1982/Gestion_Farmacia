<?php
    require_once("modeloAbstractoDB.php");
	
    class nomina extends ModeloAbstractoDB {
		
		private $id_nomina;
		private $id_empleado;
		private $fecha;
		private $salario_basico;
		private $hextrasd;
		private $hextrasn;
		private $auxilo_trasporte;
		private $valor_hextrad;
		private $valor_hextran;
		private $dias_loborados;
		private $salrio_devengado;
		private $pension;
		private $salud;
		private $salario_neto;


		function __construct() {
			//$this->db_name = '';
		}

		public function getid_nomina(){
			return $this->id_nomina;
		}

		public function getid_empleado(){
			return $this->id_empleado;
		}
		
		public function getfecha(){
			return $this->fecha;
		}
		public function getsalario_basico(){
			return $this->salario_basico;
		}
		public function gethextrasd(){
			return $this->hextrasd;
		}
		public function gethextrasn(){
			return $this->hextrasn;
		}
		public function getauxilo_trasporte(){
			return $this->auxilo_trasporte;
		}
		public function getvalor_hextrad(){
			return $this->valor_hextrad;
		}
		public function getvalor_hextran(){
			return $this->valor_hextran;
		}
		public function getdias_loborados(){
			return $this->dias_laborados;
		}
		public function getsalrio_devengado(){
			return $this->salario_devengado;
		}
		public function getpension(){
			return $this->pension;
		}
		public function getsalud(){
			return $this->salud;
		}
		public function getsalario_neto(){
			return $this->salario_neto;
		}


		public function consultar($id_nomina='') {
			if($id_nomina !=''):
				$this->query = "
                SELECT n.id_nomina,n.id_empleado, 
                e.nombre_empleado 
                FROM tb_nominas as n,tb_empleados as e;
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
			SELECT n.id_nomina, n.id_empleado,e.nombre_empleado, n.fecha, n.salario_basico, n.hextrasd,
			n.hextrasn, n.auxilio_trasporte, n.valor_hextrad, n.valor_hextran,
			n.dias_laborados, n.salario_devengado,n.pension,n.salud, n.salario_neto 
			FROM tb_nominas as n, tb_empleados as e WHERE (e.id_empleado = n.id_empleado);
			";
			
			$this->obtener_resultados_query();
			return $this->rows;
			
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_empleado', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
					
         			$this->query = "
					INSERT INTO tb_nominas
					(id_nomina, id_empleado,fecha,salario_basico,hextrasd,
					hextrasn,auxilio_trasporte,valor_hextrad,valor_hextran,
					dias_laborados,salario_devengado,pension,salud,salario_neto)
					VALUES
					(NULL, '$id_emplead', '$fecha','$salario_basico','$hextrasd','$hextrasn',
					'$auxilo_trasporte','$valor_hextrad','$valor_hextran',
					'$dias_loborados','$salrio_devengado','$pension','$salud','$salario_neto' NOW())
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
			UPDATE tb_nominas
			SET id_empleado ='$id_empleado',
			fecha ='$fecha',
			salario_basico ='$salario_basico',
			hextrasd ='$hextrasd',
			hextrasn ='$hextrasn',
			auxilo_trasporte ='$auxilo_trasporte',
			valor_hextrad ='$valor_hextrad',
			valor_hextran ='$valor_hextran',
			dias_loborados ='$dias_loborados',
			Update_at = NOW()
			WHERE id_empleado = '$id_empleado'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($comu_codi='') {
			$this->query = "
			DELETE FROM tb_nominas
			WHERE id_nomina = 'id_nomina'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
        
		function __destruct() {
			//unset($this);
		}
	}
?>