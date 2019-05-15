<!-- quick email widget -->
<div id="seccion-proveedores">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Gestión de Proveedores</i>
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
    
                <form class="form-horizontal" role="form"  id="fproveedores" name="fproveedores" method="post">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_proveedor">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="Ingrese Codigo"
                              data-validation="length alphanumeric" data-validation-length="3-12" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_proveedor">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor" placeholder="Ingrese Nombre del Proveedor"
                            value = "" required>
                        </div>
                    </div>
					
					
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="direccion_proveedor">Direccion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direccion_proveedor" name="direccion_proveedor" placeholder="Ingrese Direccion del Proveedor"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="telefono_proveedor">Telefono:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono_proveedor" name="telefono_proveedor" placeholder="Ingrese Telefono del Proveedor"
                            value = "" required>
                        </div>
                    </div>

                    <!--ZONA PARA HACER EL CARGUE DEL PAIS Y LA CIUDAD
                         /* <div class="form-group">
                    <label class="control-label col-sm-2" for="telefono_proveedor">Telefono:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono_proveedor" name="telefono_proveedor" placeholder="Ingrese Telefono del Proveedor"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="telefono_proveedor">Telefono:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono_proveedor" name="telefono_proveedor" placeholder="Ingrese Telefono del Proveedor"
                            value = "" required>
                        </div>
                    </div>*/ -->

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Proveedor">Grabar Proveedor</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>