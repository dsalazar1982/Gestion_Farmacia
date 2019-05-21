<?php
 
require_once '../Modelo/modeloProducto.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $producto = new Producto();
		$resultado = $producto->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $producto = new Producto();
		$resultado = $producto->nuevo($datos);
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
		$producto = new Producto();
		$resultado = $producto->borrar($datos['codigo']);
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
        $producto = new Producto();
        $producto->consultar($datos['codigo']);

        if($producto->getId_producto() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'id_producto' => $producto->getId_producto(),
                'nombre_producto' => $producto->getNombre_producto(),
                'foto_producto' => $producto->getFoto_producto(),
                'id_presentacion' => $producto->getId_presentacion(),
                'id_farmacia' => $producto->getId_farmacia(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $producto = new Producto();
        $listado = $producto->listar();        
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);
        break;
}
?>