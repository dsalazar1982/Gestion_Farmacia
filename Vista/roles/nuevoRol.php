<?php //include_once ("../../Funciones/sessiones.php"); ?>

    <div class="box-body">
        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">    
                <form class="form-horizontal" role="form"  id="frol" name="frol" method="post">
 					<div class="form-group">
                        <label class="control-label col-sm-2" for="id_rol">Identificador:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id_rol" name="id_rol" placeholder="Automatico"
                            value = "" readonly="true">
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
                        <input type="checkbox" name="chciudades"     value="chciudades"     id="chciudades">Ciudades<br>
                        <input type="checkbox" name="chclientes"     value="chclientes"     id="chclientes">Clientes<br>
                        <input type="checkbox" name="chfacturas"     value="chfacturas"     id="chfacturas">Facturas<br>
                        <input type="checkbox" name="chventas"       value="chventas"       id="chventas">Ventas<br>
                        <input type="checkbox" name="chfarmacias"    value="chfarmacias"    id="chfarmacias">Farmacias<br>
                        <input type="checkbox" name="chinventario"   value="chinventario"   id="chinventario">Inventario<br>
                        <input type="checkbox" name="chofertas"      value="chofertas"      id="chofertas">Ofertas<br>
                        <input type="checkbox" name="chnomina"       value="chnomina"       id="chnomina">Nomina<br>
                        <input type="checkbox" name="chpaises"       value="chpaises"       id="chpaises">Paises<br>
                        <input type="checkbox" name="chproductos"    value="chproductos"    id="chproductos">Productos<br>
                        <input type="checkbox" name="chpropietarios" value="chpropietarios" id="chpropietarios">Propietarios<br>
                        <input type="checkbox" name="chproveedores"  value="chproveedores"  id="chproveedores">Proveedores<br>
                        <input type="checkbox" name="chusuarios"     value="chusuarios"     id="chusuarios">Usuarios<br>
                        <input type="checkbox" name="chroles"        value="chroles"        id="chroles">Roles<br>
                        <input type="checkbox" name="chcarousel"     value="chcarousel"     id="chcarousel">Carousel<br>
                        <input type="checkbox" name="chlogs"         value="chlogs"         id="chlogs">Logs<br>
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar rol">Grabar rol</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
