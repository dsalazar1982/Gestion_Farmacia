<!-- quick email widget -->
<div id="seccion-pais">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Nueva Farmacia</i>
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
    
                <form class="form-horizontal" role="form"  id="farmacia" name="farmacia" method="post">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_farmacia">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_farmacia" name="id_farmacia" placeholder="Ingrese Codigo"
                              data-validation="length alphanumeric" data-validation-length="3-12" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_farmacia">Nombre de farmacia:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre_farmacia" name="nombre_farmacia" placeholder="Ingrese Codigo"
                              data-validation="length alphanumeric" data-validation-length="3-12" required/>
                        </div>
                    </div>
					
                    <div class="form-group">
                    <label class="control-label col-sm-2" for="direccion_farmacia">Ingrese direccion de la farmacia:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direccion_farmacia" name="direccion_farmacia" placeholder="Ingrese codigo del usuario"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="telefono_farmacia">Ingrese Telefono:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono_farmacia" name="telefono_farmacia" placeholder="Ingrese el telefono"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="id_ciudad">Ingrese ciudad:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_ciudad" name="id_ciudad" placeholder="Ingrese idpropietario"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="id_propietario">Ingrese el id del propietario:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_propietario" name="id_propietario" placeholder="Ingrese idpropietario"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                    <label class="control-label col-sm-2" for="id_usuario">id_usuario</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_usuario" name="id_usuario" placeholder="id_usuario"
                            value = "" required>
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar farmacia">Grabar Farmacia</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>