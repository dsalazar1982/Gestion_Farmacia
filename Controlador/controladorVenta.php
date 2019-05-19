<?php
 
require_once '../Modelo/modeloVenta.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $venta = new Venta();
		$resultado = $venta->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $venta = new Venta();
		$resultado = $venta->nuevo($datos);
        if($resultado > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }  else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        echo json_encode($respuesta);
        break;
    case 'borrar':
		$venta = new Venta();
		$resultado = $venta->borrar($datos['codigo']);
        if($resultado > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }  else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'consultar':
        $venta = new Venta();
        $venta->consultar($datos['codigo']);

        if($venta->getId_factura() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'id_factura' => $venta->getId_factura(),
                'id_cliente' => $venta->getId_cliente(),
                'id_Usuario' => $venta->getId_Usuario(),
                'fecha_factura' => $venta->getFecha_factura(),
                'valor_factura' => $venta->getValor_factura(),
                'descuento_total' => $venta->getDescuento_total(),
                'iva_factura' => $venta->getIva_factura(),
                'neto_factura'=> $venta->getNeto_factura(),
                'id_formapago'=> $venta->getId_formapago(),
                'online'=> $venta->getOnline(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $venta = new Venta();
        $listado = $venta->listar();        
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);
        break;
}
?>