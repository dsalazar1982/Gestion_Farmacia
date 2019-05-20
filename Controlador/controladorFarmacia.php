<?php
 
require_once '../Modelo/modeloFarmacia.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $farmacia = new Farmacia();
		$resultado = $farmacia->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $farmacia = new Farmacia();
		$resultado = $farmacia->nuevo($datos);
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
		$farmacia = new Farmacia();
		$resultado = $farmacia->borrar($datos['codigo']);
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
        $farmacia = new Farmacia();
        $farmacia->consultar($datos['codigo']);

        if($farmacia->getId_farmacia() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'id_farmacia' => $farmacia->getId_farmacia(),
                'nombre_farmacia' => $farmacia->getNombre_farmacia(),
                'direccion_farmacia' => $farmacia->getDireccion_farmacia(),
                'telefono_farmacia' => $farmacia->getTelefono_farmacia(),
                'id_ciudad' => $farmacia->getId_ciudad(),
                'id_propietario' => $farmacia->getId_propietario(),
                'id_usuario' => $farmacia->getId_usuario(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $farmacia = new Farmacia();
        $listado = $farmacia->listar();        
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);
        break;
}
?>