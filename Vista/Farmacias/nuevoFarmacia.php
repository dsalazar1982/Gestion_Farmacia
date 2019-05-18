<div id="seccion-farmacia">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Gestión de Farmacia</i>
        <!-- tools box far fa-building -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar2" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times-circle"></i></button>
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
    
                <form class="form-horizontal" role="form"  id="ffarmacia">
                 <fieldset> <!-- Enmarca el formulario -->
 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_farmacia">Código:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_farmacia" name="id_farmacia" placeholder="Código Automático" value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_farmacia">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre_farmacia" name="nombre_farmacia" placeholder="Ingrese Nombre Farmacia"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="direccion_farmacia">Dirección:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direccion_farmacia" name="direccion_farmacia" placeholder="Ingrese Dirección Farmacia"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="telefono_farmacia">Telefono:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono_farmacia" name="telefono_farmacia" placeholder="Ingrese Telefono Farmacia"
                            value = "">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_ciudad">Ciudad:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_ciudad" name="id_ciudad">
                         	</select>	
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="id_propietario">Id Propietario</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fa fa-city"></i></span>
                            <select class="form-control" id="id_propieatario" name="id_propietario">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaPropietario as $fila){ ?>
								<option value="<?php echo trim($fila['id_propietario']); ?>" >
								<?php echo utf8_encode(trim($fila['nombre_propietario'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="id_usuario">Id Usuario</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fa fa-city"></i></span>
                            <select class="form-control" id="id_usuario" name="id_usuario">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaUsuario as $fila){ ?>
								<option value="<?php echo trim($fila['id_usuario']); ?>" >
								<?php echo utf8_encode(trim($fila['nombre_usuario'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Farmacia">Grabar Farmacia</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>  <!-- codigo listo, funcionando -->