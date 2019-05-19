<!-- quick email widget -->
<div id="seccion-pais">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Nuevo Cliente</i>
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
    
                <form class="form-horizontal" role="form"  id="fcliente" name="fcliente" method="post">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_cliente">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_cliente" name="id_cliente" placeholder="Ingrese Codigo de factura"
                              data-validation="length alphanumeric" data-validation-length="3-12" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_cliente">Nombre del cliente:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="Ingrese nombre del cliente"
                              data-validation="length alphanumeric" data-validation-length="3-12" required/>
                        </div>
                    </div>
					
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="direccion_cliente">Direccion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente" placeholder="Ingrese direccion"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="telefono_cliente">Telefono:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" placeholder="Ingrese telefono"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="id_pais">id_pais:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_pais" name="id_pais" placeholder="Ingrese Pais"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="id_ciudad">id_ciudad:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_ciudad" name="id_ciudad" placeholder="Ingrese Ciudad"
                            value = "" required>
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Cliente">Grabar Cliente</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>