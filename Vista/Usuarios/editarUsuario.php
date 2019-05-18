<?php //include_once ("../../Funciones/sessiones.php"); ?>
<!-- quick email widget -->

    <div class="box-body">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">    
                <form class="form-horizontal" role="form"  id="fusuario">
 					<div class="form-group">
                        <label class="control-label col-sm-1" for="id_usuario">Codigo:</label>
                        <div class="input-group col-sm-10">
                            <input type="text" class="form-control " id="id_usuario" name="id_usuario" placeholder="Automatico"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="nickname_usuario">Nickname:</label>
                        <div class="input-group col-sm-10">
                            <input type="text" class="form-control" id="nickname_usuario" name="nickname_usuario" placeholder="Ingrese Nickname"
                            value = "">
                        </div>                    
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-sm-1" for="clave_usuario">Clave:</label>
                        <div class="input-group col-sm-10">
                            <input type="password" class="form-control" id="clave_usuario" name="clave_usuario" placeholder="Ingrese Clave"
                            value = "">
                        </div>                    
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="id_estado">Estado:</label>
                        <div class="input-group col-sm-10">
                            <select class="form-control" id="id_estado" name="id_estado">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaEstado as $fila){ ?>
								<option value="<?php echo trim($fila['id_estado']); ?>" >
								<?php echo utf8_encode(trim($fila['nombre_estado'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="id_rol">Rol:</label>
                        <div class="input-group col-sm-10">
                            <select class="form-control" id="id_rol" name="id_rol">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaRol as $fila){ ?>
								<option value="<?php echo trim($fila['id_rol']); ?>" >
								<?php echo utf8_encode(trim($fila['nombre_rol'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="fechacreacion_usuario">Fecha creacion:</label>
                        <div class="input-group col-sm-10">
                            <input type="date" class="form-control" id="fechacreacion_usuario" name="fechacreacion_usuario"
                            value = "">
                        </div>                    
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="id_empleado">Empleado:</label>
                        <div class="input-group col-sm-10">
                            <select class="form-control" id="id_empleado" name="id_empleado">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaRol as $fila){ ?>
								<option value="<?php echo trim($fila['id_empleado']); ?>" >
								<?php echo utf8_encode(trim($fila['nombre_completo'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Comuna">Grabar Comuna</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="editar" name="accion"/>
			</fieldset>

		</form>
	</div>
