<?php
 
require_once '../Modelo/modelousuariosxEmpleados.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $comuna = new Comuna();
        $resultado = $comuna->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $usuarioxempleado = new Usuarioxempleado();
        $resultado = $usuarioxempleado->nuevo($datos['codigo'],$datos['codigoU']);
        if($resultado > 0) {
            $respuesta = array(
                'respuesta' => $resultado
            );
        }  else {
            $respuesta = array(
                'respuesta' => $resultado
            );
        }
        echo json_encode($respuesta);
        break;
       
    case 'borrar':
		$comuna = new Comuna();
		$resultado = $comuna->borrar($datos['codigo']);
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
        $usuarioxempleado = new Usuarioxempleado();
        $usuarioxempleado->consultar($datos['codigo']);

        if($usuarioxempleado->getId_usuarioxempleado() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'empleado' => $usuarioxempleado->getId_empleado(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $comuna = new Comuna();
        $listado = $comuna->lista();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>
