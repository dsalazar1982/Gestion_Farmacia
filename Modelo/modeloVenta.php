<?php
	require_once('modeloAbstractoDB.php');
	class Venta extends ModeloAbstractoDB {
		public $id_factura;
		public $id_cliente;
		public $id_Usuario;
		public $fecha_factura;
		public $valor_factura;
		public $descuento_total;
		public $iva_factura;
		public $neto_factura;
		public $id_formapago;
		public $online;
		
		function __construct() {
		}
		
		public function getId_factura(){
			return $this->id_factura;
		}

		public function getId_cliente(){
			return $this->id_cliente;
		}

		public function getId_Usuario(){
			return $this->id_Usuario;
		}
		
		public function getFecha_factura(){
			return $this->fecha_factura;
		}

		public function getValor_factura(){
			return $this->valor_factura;
		}

		public function getDescuento_total(){
			return $this->descuento_total;
		}

		public function getIva_factura(){
			return $this->iva_factura;
		}

		public function getNeto_factura(){
			return $this->neto_factura;
		}

		public function getId_formapago(){
			return $this->id_formapago;
		}

		public function getonline(){
			return $this->online;
		}

		public function consultar($id_factura='') {
			if($id_factura != ''):
				$this->query = "
				SELECT id_factura, id_cliente, id_Usuario,
				fecha_factura, valor_factura, descuento_total,
				iva_factura, neto_factura, id_formapago, online 
				FROM tb_facturas
				WHERE id_factura = '$id_factura'
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
			SELECT id_factura, id_cliente, id_Usuario,
			fecha_factura, valor_factura, descuento_total,
			iva_factura, neto_factura, id_formapago, online 
			FROM tb_facturas ORDER BY id_cliente
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		public function listaventa() {
			$this->query = "
			SELECT id_factura, id_cliente, id_Usuario,
			fecha_factura, valor_factura, descuento_total,
			iva_factura, neto_factura, id_formapago, online 
			FROM tb_facturas as d order by id_cliente
			";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('id_factura', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$id_factura= utf8_decode($id_factura);
				$id_cliente= utf8_decode($id_cliente);
				$this->query = "
				INSERT INTO tb_facturas
				(id_factura, id_cliente, id_Usuario,
				fecha_factura, valor_factura, descuento_total,
				iva_factura, neto_factura, id_formapago, online)
				VALUES
				('$id_factura', '$id_cliente', '$id_Usuario',
				'$fecha_factura', '$valor_factura', '$descuento_total',
				'$iva_factura', '$neto_factura', '$id_formapago', '$online')
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
			UPDATE tb_facturas
			SET id_cliente='$id_cliente', id_Usuario='$id_Usuario', fecha_factura='$fecha_factura',
			valor_factura='$valor_factura', descuento_total='$descuento_total', iva_factura='$iva_factura',
			neto_factura='$neto_factura', id_formapago='$id_formapago', online='$online'
			WHERE id_factura = '$id_factura'
			";
			$resultado = $this->ejecutar_query_simple();
			return $resultado;
		}
		
		public function borrar($id_factura='') {
			$this->query = "
			DELETE FROM tb_facturas
			WHERE id_factura = '$id_factura'
			";
			$resultado = $this->ejecutar_query_simple();

			return $resultado;
		}
		
		function __destruct() {
		}
	}
?>