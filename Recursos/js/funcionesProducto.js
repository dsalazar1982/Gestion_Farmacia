var dt;

function producto() {
    $(".content-header").on("click", "button#actualizar", function() {
        var datos = $("#fproducto").serialize();
        $.ajax({
            type: "get",
            url: "./Controlador/controladorProducto.php",
            data: datos,
            dataType: "json"
        }).done(function(resultado) {
            if (resultado.respuesta) {
                swal(
                    'Actualizado!',
                    'Se actualizaron los datos correctamente',
                    'success'
                )
                dt.ajax.reload();
                $("#titulo").html("Listado Pais");
                $("#nuevo-editar").html("");
                $("#nuevo-editar").removeClass("show");
                $("#nuevo-editar").addClass("hide");
                $("#producto").removeClass("hide");
                $("#producto").addClass("show")
            } else {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                })
            }
        });
    })

    $(".content-header").on("click", "a.borrar", function() {
        //Recupera datos del formulario
        var codigo = $(this).data("codigo");

        swal({
            title: '¿Está seguro?',
            text: "¿Realmente desea borrar el producto con codigo : " + codigo + " ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borrarlo!'
        }).then((decision) => {
            if (decision.value) {

                var request = $.ajax({
                    method: "get",
                    url: "./Controlador/controladorProducto.php",
                    data: { codigo: codigo, accion: 'borrar' },
                    dataType: "json"
                })

                request.done(function(resultado) {
                    if (resultado.respuesta == 'correcto') {
                        swal(
                            'Borrado!',
                            'El producto con codigo : ' + codigo + ' fue borrado',
                            'success'
                        )
                        dt.ajax.reload();
                    } else {
                        swal({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        })
                    }
                });

                request.fail(function(jqXHR, textStatus) {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!' + textStatus
                    })
                });
            }
        })

    });

    $(".content-header").on("click", "button.btncerrar2", function() {
        $("#titulo").html("Listado de Ventas");
        $("#nuevo-editar").html("");
        $("#nuevo-editar").removeClass("show");
        $("#nuevo-editar").addClass("hide");
        $("#producto").removeClass("hide");
        $("#producto").addClass("show");

    })

    $(".content-header").on("click", "button.btncerrar", function() {
        $("#contenedor").removeClass("show");
        $("#contenedor").addClass("hide");
        $(".content-header").html('')
    })

    $(".content-header").on("click", "button#nuevo", function() {
        $(this).hide();
        $("#titulo").html("Nueva venta");
        $("#nuevo-editar").load("./Vista/Producto/nuevoproducto.php", function(){
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#producto").removeClass("show");
        $("#producto").addClass("hide");
        $.ajax({
            type: "get",
            url: "./Controlador/controladorPresentacion.php",
            data: { accion: 'listar' },
            dataType: "json"
        }).done(function(resultado) {;
            $("#id_presentacion option").remove()
            $("#id_presentacion").append("<option selecte value=''>Seleccione presentacion</option>")
            $("#id_farmacia").append("<option selecte value=''>Seleccione primero presentacion</option>")
            $.each(resultado.data, function(index, value) {
                $("#id_presentacion").append("<option value='" + value.id_presentacion + "'>" + value.nombre_presentacion + "</option>")
            });
        });
        $("#id_presentacion").change(function() {
            $("#id_presentacion option:selected").each(function() {
                var id_presentacion = document.forms['fproducto']['id_presentacion'].value;
                $.ajax({
                    type: "get",
                    url: "./Controlador/controladorFarmacia.php",
                    data: { codigo: id_presentacion, accion: 'listar' },
                    dataType: "json"
                }).done(function(resultado) {
                    $("#id_farmacia option").remove()
                    $("#id_farmacia").append("<option selecte value=''>Seleccione una farmacia</option>")
                    $.each(resultado.data, function(index, value) {
                        $("#id_farmacia").append("<option value='" + value.id_farmacia+ "'>" + value.nombre_farmacia + "</option>")
                    });
                });
            });
         });
        });
    })

    $(".content-header").on("click", "button#grabar", function() {
        var codigo = document.forms["fproducto"]["id_producto"].value;
        $.ajax({
            type: "get",
            url: "./Controlador/controladorProducto.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(producto) {
            if (producto.respuesta == "no existe") {
                var datos = $("#fproducto").serialize();

                $.ajax({
                    type: "get",
                    url: "./Controlador/controladorProducto.php",
                    data: datos,
                    dataType: "json"
                }).done(function(resultado) {
                    if (resultado.respuesta) {
                        swal(
                            'Grabado!!',
                            'El registro se grabó correctamente',
                            'success'
                        )
                        dt.ajax.reload();
                        $("#titulo").html("Listado paises");
                        $("#nuevo-editar").html("");
                        $("#nuevo-editar").removeClass("show");
                        $("#nuevo-editar").addClass("hide");
                        $("#producto").removeClass("hide");
                        $("#producto").addClass("show")
                    } else {
                        swal({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        })
                    }
                });
            } else {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'El producto ya existe!!!!!'
                })
            }
        });
    });

    $(".content-header").on("click", "a.editar", function() {
        $("#titulo").html("Editar Venta");
        //Recupera datos del formulario
        var codigo = $(this).data("codigo");

        $("#nuevo-editar").load("./Vista/Producto/editarProducto.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#producto").removeClass("show");
        $("#producto").addClass("hide");
        $.ajax({
            type: "get",
            url: "./Controlador/controladorProducto.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(producto) {
            if (producto.respuesta === "no existe") {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Producto no existe!'
                })
            } else {
                $("#id_producto").val(producto.id_producto);
                $("#nombre_prodcuto").val(producto.nombre_producto);
                $("#foto_producto").val(producto.foto_producto);
                $("#id_presentacion").val(producto.id_presentacion);
                $("#id_farmacia").val(producto.valor_id_farmacia);

            }
        });
    })

}
$(document).ready(() => {
    $(".content-header").off("click", "a.editar");
    $(".content-header").off("click", "button#actualizar");
    $(".content-header").off("click", "a.borrar");
    $(".content-header").off("click", "button#nuevo");
    $(".content-header").off("click", "button#grabar");
    $("#titulo").html("Listado de Pais");
    dt = $("#tabla").DataTable({
        "ajax": "./Controlador/controladorProducto.php?accion=listar",
        "columns": [
            { "data": "id_producto" },
            { "data": "nombre_prodcuto" },
            { "data": "foto_producto" },
            { "data": "nombre_presentacion"},
            { "data": "nombre_farmacia"},

            {
                "data": "id_producto",
                render: function(data) {
                    return '<a href="#" data-codigo="' + data +
                        '" class="btn btn-danger btn-sm borrar"> <i class="fa fa-trash"></i></a>'
                }
            },
            {
                "data": "id_producto",
                render: function(data) {
                    return '<a href="#" data-codigo="' + data +
                        '" class="btn btn-info btn-sm editar"> <i class="fa fa-edit"></i></a>';
                }
            }
        ]
    });

    producto();
});