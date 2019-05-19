<div id="seccion-propietario">
    <div class="box-header">
        <i class="fa fa-building" aria-hidden="true">Gestion de Farmacia</i>

        <!-- tools box -->
        <div class="pull-right box-tools">
            <button class="btn btn-info btn-sm btncerrar2" data-toggle="tooltip" title="Cerrar"><i
                    class="fa fa-times"></i></button>
        </div><!-- /. tools -->
    </div>
    <div class="box-body">

        <div align="center">
            <div id="actual">
            </div>
        </div>

        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">Datos</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" id="ffarmacia">


                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id_farmacia">Codigo:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_farmacia" name="id_farmacia"
                                    placeholder="Ingrese id Farmacia" value="" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="nombre_farmacia">Nombre:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre_farmacia"
                                    name="nombre_farmacia" placeholder="Ingrese Nombre de farmacia" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="direccion_farmacia">Direccion:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="direccion_farmacia"
                                    name="direccion_farmacia" placeholder="Ingrese Direccion Farmacia" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="telefono_farmacia">Direccion:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telefono_farmacia"
                                    name="telefono_farmacia" placeholder="Ingrese Telefono Farmacia" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="telefono_propietario">Telefono:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telefono_propietario"
                                    name="telefono_propietario" placeholder="Ingrese telefono propietario" value="">
                            </div>
                        </div>


                        <div class="form-group">
                        <label class="control-label col-sm-2" for="">Ciudad:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_ciudad" name="id_ciudad">
							
							</select>
                        </div>
                    </div>

                        <div class="form-group">
                        <label class="control-label col-sm-2" for="id_propietario">Propietario:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id_propietario" name="id_propieatario">
							
							</select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id_usuario">Usuario:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="id-usuario" name="id_usuario">
							
							</select>
                        </div>
                    </div>

                    <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" id="actualizar" data-toggle="tooltip"
                                    title="Actualizar Propietario" class="btn btn-primary">Actualizar</button>
                                <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición"
                                    class="btn btn-success btncerrar2">Cancelar</button>
                            </div>

                        </div>

                        <input type="hidden" id="editar" value="editar" name="accion" />
                        </fieldset>

                    </form>
                </div>
                <input type="hidden" id="pagina" value="editar" name="editar" />
            </div>