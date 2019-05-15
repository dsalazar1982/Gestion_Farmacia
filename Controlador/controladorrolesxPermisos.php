<?php
require_once '../Modelo/modelorolesxPermisos.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $rolxpermiso = new Rolxpermiso();
        $resultado = $rolxpermiso->editar($datos);
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
        $rolxpermiso = new Rolxpermiso();
        $rolxpermiso->consultar($datos['codigo']);

        if($rolxpermiso->getId_rolxpermiso() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'codigo' => $rolxpermiso->getId_rolxpermiso(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $rolxpermiso = new Rolxpermiso();
        $listado = $rolxpermiso->lista($data['codigo']);
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>
