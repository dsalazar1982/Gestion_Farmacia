<?php include_once ("../../Funciones/sessiones.php"); ?>
<!-- quick email widget -->

    <div class="box-body">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">    
                <form class="form-horizontal" role="form"  id="fnomina">
 					<div class="form-group">
                        <label class="control-label col-sm-1" for="id_nomina">Codigo:</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-tags"></i></span>
                            <input type="text" class="form-control " id="id_nomina" name="id_nomina" placeholder="Ingrese Codigo"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="id_nomina">Id nomina:</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="id_nomina" name="id_nomina" placeholder="Ingrese id Nomina"
                            value = "">
                        </div>                    
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-1" for="id_empleado">Id Empleado</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fa fa-city"></i></span>
                            <select class="form-control" id="id_empleado" name="id_empleado">
                            <option value="" selected>Seleccione ...</option>
								<?php foreach($listaNomina as $fila){ ?>
								<option value="<?php echo trim($fila['id_empleado']); ?>" >
								<?php echo utf8_encode(trim($fila['nombre_empleado'])); ?> </option>

								<?php } ?>
							</select>	
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="fecha">Fecha de nomina:</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la Fecha de nomina"
                            value = "">
                        </div>                    
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="salario_basico">Salario basico:</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="salario_basico" name="salario_basico" placeholder="Ingrese salario basico"
                            value = "">
                        </div>                    
                    </div>

                    
                    <div class="form-group">
                        <label class="control-label col-sm-1" for="hextrad"> Cantidad Hostas Extras diurnas</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="hextrad" name="hextrad" placeholder="Ingrese las Horas Extras diurnas"
                            value = "">
                        </div>                    
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="hextran">Cantidad Hostas Extras Nocturnas</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="hextran" name="hextran" placeholder="Ingrese Cantidad Hostas Extras Nocturnas"
                            value = "">
                        </div>                    
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-1" for="auxilio_trasporte">Auxilio de Trasporte</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="auxilio_trasporte" name="auxilio_trasporte" placeholder="Auxilio de Trasporte"
                            value = "">
                        </div>                    
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="valor_hextrad">Valor Hora Extra Dia</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="valor_hextrad" name="valor_hextrad" placeholder="Valor Hora Extra Dia"
                            value = "">
                        </div>                    
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="valor_hextran">Valor Hora Extra Noche</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="valor_hextran" name="valor_hextran" placeholder="Valor Hora Extra Dia"
                            value = "">
                        </div>                    
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="dias_loborados;">Dias Laborados</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="dias_loborados" name="dias_loborados" placeholder="Auxilio de Trasporte"
                            value = "">
                        </div>                    
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="salrio_devengado">Salario Devengdo</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="salario_devengado" name="valor_hextrad" placeholder="Auxilio de Trasporte"
                            value = "">
                        </div>                    
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="salario_basico">Auxilio de Trasporte</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="salario_basico" name="salario_basico" placeholder="Auxilio de Trasporte"
                            value = "">
                        </div>                    
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-1" for="salario_basico">Auxilio de Trasporte</label>
                        <div class="input-group col-sm-10">
                            <span class="input-group-addon"><i class="fas fa-building"></i></span>
                            <input type="text" class="form-control" id="salario_basico" name="salario_basico" placeholder="Auxilio de Trasporte"
                            value = "">
                        </div>                    
                    </div>








					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Comuna">Grabar Comuna</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>




$valor_dia=$salario_basico/30;
		$salud=$salario_basico*0.04;
		$pension=$salario_basico*0.04;
		$valor1=$valor_hextrad*$valor_hextrad;
		$valor2=$valor_hextran*$valor_hextran;
		$valor3=$valor_dia*$dias_loborados;
		$salrio_devengado=$valor1+$valor2+$valor3-($salud+$pension);