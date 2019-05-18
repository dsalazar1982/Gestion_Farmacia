<?php
 
require_once '../Modelo/modeloNomina.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $nomina = new nomina();
        $resultado = $nomina->editar($datos);
        $respuesta = array(
            'respuesta' => $resultado
        );
        echo json_encode($respuesta);
        break;
   
    case 'nuevo':
        $nomina = new nomina();
        $resultado = $nomina->nuevo($datos);
        if($resultado > 0) 
        {
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
		$nomina = new nomina();
		$resultado = $nomina->borrar($datos['codigo']);
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
        $nomina = new nomina();
        $nomina->consultar($datos['codigo']);

        if($nomina->getid_nomina() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'codigo' => $nomina->getid_nomina(),
                'id' => $nomina->getid_empleado(),
                'empleado' =>$nomina->getnombre_empleado(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $nomina = new nomina();
        $listado = $nomina->lista();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>
