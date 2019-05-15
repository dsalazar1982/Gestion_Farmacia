<?php
require_once '../Modelo/modelorolesxPermisos.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar':
        $rolxpermiso = new Rolxpermiso();
        $resultado = $rol->editar($datos);
        $respuesta = array(
                'respuesta' => $resultado
            );
        echo json_encode($respuesta);
        break;
    case 'nuevo':
        $rolxpermiso = new Rolxpermiso();
        $resultado = $rol->nuevo($datos);
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
		$rol = new Rol();
		$resultado = $rol->borrar($datos['codigo']);
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
        $rol = new Rol();
        $rol->consultar($datos['codigo']);

        if($rol->getId_rol() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'codigo' => $rol->getId_rol(),
                'nombre' => $rol->getNombre_rol(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $rol = new Rol();
        $listado = $rol->lista();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>