<?php include_once ("../../Funciones/sessiones.php"); ?>
<!-- quick email widget -->


    <div class="box-body">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">    
                <form class="form-horizontal" role="form"  id="fnomina">
 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_nomina">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_nomina" name="id_nomina" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_empleado">Id Empleado:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_empleado" name="id_empleado" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_empleado">Nombre:</label>
                        <div class="col-sm-10">
                        
                            <input type="text" class="form-control" id="nombre_empleado" name="nombre_empleado" placeholder="Ingrese el nombre del empleado"
                            value = "">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="muni_codi">Id Empleado:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_empleado" name="id_empleado">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaEmpleado as $fila){ ?>
								<option value="<?php echo trim($fila['id_empleado']); ?>" >
								<?php echo utf8_encode(trim($fila['nombre_empleado'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar" class="btn btn-primary" data-toggle="tooltip" title="Actualizar Comuna">Actualizar Comuna</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="editar" name="accion"/>
			</fieldset>

		</form>
	</div>
