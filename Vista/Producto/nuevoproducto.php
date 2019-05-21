<!-- quick email widget -->
<div id="seccion-pais">
	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Nuevo producto</i>
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
    
                <form class="form-horizontal" role="form"  id="fproducto" name="fproducto" method="post">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_producto">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_producto" name="id_producto" placeholder="Ingrese Codigo de producto"
                              data-validation="length alphanumeric" data-validation-length="3-12" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_prodcuto">Nombre producto:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre_prodcuto" name="nombre_prodcuto" placeholder="Ingrese nombre del producto"
                              data-validation="length alphanumeric" data-validation-length="3-12" required/>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="foto_producto">Imagen:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="foto_producto" name="foto_producto" placeholder="Ingrese toto"
                              data-validation="length alphanumeric" data-validation-length="3-12" required/>
                        </div>
                    </div>

                     <div class="form-group">
                            <label class="control-label col-sm-2" for="id_presentacion">Presentacion:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="id_presentacion" name="id_presentacion">

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id_farmacia">Farmacia:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="id_farmacia" name="id_farmacia">

                                </select>
                            </div>
                        </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Producto">Grabar Producto</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
</div>