<?php
 
require_once '../Modelo/modeloNomina.php';
$datos = $_GET;
switch ($_GET['accion']){
    case 'editar':
        $nomina = new Nomina();
        $resultado = $nomina->editar($datos);
        $respuesta = array(
            'respuesta' => $resultado
        );
        echo json_encode($respuesta);
        break;
   
    case 'nuevo':
        $nomina = new Nomina();
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
		$nomina = new Nomina();
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
        $nomina = new Nomina();
        $nomina->consultar($datos['codigo']);

        if($nomina->getId_nomina() == null) {
            $respuesta = array(
                'respuesta' => 'no existe'
            );
        }  else {
            $respuesta = array(
                'codigo' => $nomina->getId_nomina(),
                'cc' => $nomina->getId_empleado(),
                'empleado' =>$nomina->getNombre_empleado(),
                'fecha' =>$nomina->getFecha(),// seguir colocando todos los get
                'SalarioB' =>$nomina->getSalario_basico(),
                'Hextrad' =>$nomina->getHextrasd(),
                'Hextran' =>$nomina->getHextrasn(),
                'Valor Hora Extra D' =>$nomina->getValor_hextrad(),
                'Valor Hora Extra N' =>$nomina->getValor_hextran(),
                'Dias Laborados '=>$nomina->getDias_loborados(),
                'Salario Devengado' =>$nomina->getSalrio_devengado(),
                'Salud' =>$nomina->getPension(),
                'Pension' =>$nomina->getSalud(),
                'Salario Devengado' =>$nomina->getSalario_neto(),
                'respuesta' =>'existe'
            );
        }
        echo json_encode($respuesta);
        break;

    case 'listar':
        $nomina = new Nomina();
        $listado = $nomina->listar();
        echo json_encode(array('data'=>$listado), JSON_UNESCAPED_UNICODE);    
        break;
}
?>
