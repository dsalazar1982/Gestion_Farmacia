<!-- quick email widget -->
<div id="seccion-pais">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Nueva Venta</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar2" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
    </div>
    <div class="box-body">

		<div align ="center">
				<div id="actual"> 
				</div>
		</div>


        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fventa" name="fventa" method="post">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_factura">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_factura" name="id_factura" placeholder="Ingrese Codigo de factura"
                              data-validation="length alphanumeric" data-validation-length="3-12" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_cliente">Codigo del cliente:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_cliente" name="id_cliente" placeholder="Ingrese codigo del cliente"
                            value = "" required>
                        </div>
                    </div>
					
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="id_Usuario">id_Usuario:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_Usuario" name="id_Usuario" placeholder="Ingrese codigo del usuario"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-xs-10">
                        <label for="">Fecha(*): </label>
                        <input class="form-control" type="date" name="fecha_factura" id="fecha_factura" required>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="valor_factura">valor_factura:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="valor_factura" name="valor_factura" placeholder="Ingrese valor de la factura"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="descuento_total">descuento_total:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="descuento_total" name="descuento_total" placeholder="Ingrese descuento_total"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="iva_factura">iva_factura:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="iva_factura" name="iva_factura" placeholder="Ingrese iva_factura"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="neto_factura">neto_factura:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="neto_factura" name="neto_factura" placeholder="El neto a pagar es:"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="id_formapago">id_formapago:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_formapago" name="id_formapago" placeholder="Selecciona la forma de pago:"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="online">online:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="online" name="online" placeholder="Seleccione si la venta es Online o Normal:"
                            value = "" required>
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Venta">Grabar Venta</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>