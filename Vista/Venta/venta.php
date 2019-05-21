<?php include_once ("../../Funciones/sessiones.php"); ?>
<div id="nuevo-editar" class="hide">
		<!-- div para cargar el formulario para una nueva venta o editar una venta -->
</div>

<div id="venta">
<div class="box-header">
    <i class="ion ion-clipboard"></i>
     <!-- tools box -->
    <div class="pull-right box-tools">
    	<button class="btn btn-info btn-sm" id="nuevo"  data-toggle="tooltip" title="Nueva venta"><i class="fa fa-plus" aria-hidden="true"></i></button> 
    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>

    </div><!-- /. tools -->
                  
</div><!-- /.box-header -->

<div class="box-body">

	<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th class="text-center">Id_factura</th>
				<th class="text-center">Id_cliente</th>
				<th class="text-center">Id_usuario</th>
                <th class="text-center">fecha_factura</th>
                <th class="text-center">Valor_factura</th>
                <th class="text-center">Descuento_factura</th>
                <th class="text-center">Iva_factura</th>
                <th class="text-center">Neto_factura</th>
                <th class="text-center">Forma de pago</th>
                <th class="text-center">Online</th>
				<th>&nbsp;</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		
		</tbody>

	</table>

</div><!-- /.box-body -->  
<script src="./Recursos/js/funcionesVenta.js"></script>
</div>