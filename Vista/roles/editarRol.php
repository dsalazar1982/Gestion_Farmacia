<?php //include_once ("../../Funciones/sessiones.php"); ?>

    <div class="box-body">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">    
                <form class="form-horizontal" role="form"  id="frol">
 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_rol">Identificador:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_rol" name="id_rol"
                            value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nombre_rol">Descripción:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre_rol" name="nombre_rol" placeholder="Ingrese la descripcion del rol"
                            value = "">
                        </div>
                    </div>
					
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_rolxpermiso">Permisos:</label>
                        <div class="col-sm-10">
                        <input type="checkbox" name="chciudades"     value="chciudades"     id="1">Ciudades<br>
                        <input type="checkbox" name="chclientes"     value="chclientes"     id="2">Clientes<br>
                        <input type="checkbox" name="chfacturas"     value="chfacturas"     id="3">Facturas<br>
                        <input type="checkbox" name="chventas"       value="chventas"       id="4">Ventas<br>
                        <input type="checkbox" name="chfarmacias"    value="chfarmacias"    id="5">Farmacias<br>
                        <input type="checkbox" name="chinventario"   value="chinventario"   id="6">Inventario<br>
                        <input type="checkbox" name="chofertas"      value="chofertas"      id="7">Ofertas<br>
                        <input type="checkbox" name="chnomina"       value="chnomina"       id="8">Nomina<br>
                        <input type="checkbox" name="chpaises"       value="chpaises"       id="9">Paises<br>
                        <input type="checkbox" name="chproductos"    value="chproductos"    id="10">Productos<br>
                        <input type="checkbox" name="chpropietarios" value="chpropietarios" id="11">Propietarios<br>
                        <input type="checkbox" name="chproveedores"  value="chproveedores"  id="12">Proveedores<br>
                        <input type="checkbox" name="chusuarios"     value="chusuarios"     id="13">Usuarios<br>
                        <input type="checkbox" name="chroles"        value="chroles"        id="14">Roles<br>
                        <input type="checkbox" name="chcarousel"     value="chcarousel"     id="15">Carousel<br>
                        <input type="checkbox" name="chlogs"         value="chlogs"         id="16">Logs<br>
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar" class="btn btn-primary" data-toggle="tooltip" title="Actualizar rol">Actualizar rol</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="editar" name="accion"/>
			</fieldset>

		</form>
	</div>
