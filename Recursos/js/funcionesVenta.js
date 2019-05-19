var dt;

function venta() {
    $(".content-header").on("click", "button#actualizar", function() {
        var datos = $("#fventa").serialize();
        $.ajax({
            type: "get",
            url: "./Controlador/controladorVenta.php",
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
                $("#venta").removeClass("hide");
                $("#venta").addClass("show")
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
            text: "¿Realmente desea borrar la venta con codigo : " + codigo + " ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borrarlo!'
        }).then((decision) => {
            if (decision.value) {

                var request = $.ajax({
                    method: "get",
                    url: "./Controlador/controladorVenta.php",
                    data: { codigo: codigo, accion: 'borrar' },
                    dataType: "json"
                })

                request.done(function(resultado) {
                    if (resultado.respuesta == 'correcto') {
                        swal(
                            'Borrado!',
                            'La venta con codigo : ' + codigo + ' fue borrado',
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
        $("#venta").removeClass("hide");
        $("#venta").addClass("show");

    })

    $(".content-header").on("click", "button.btncerrar", function() {
        $("#contenedor").removeClass("show");
        $("#contenedor").addClass("hide");
        $(".content-header").html('')
    })

    $(".content-header").on("click", "button#nuevo", function() {
        $("#titulo").html("Nueva venta");
        $("#nuevo-editar").load("./Vista/Venta/nuevoVenta.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#venta").removeClass("show");
        $("#venta").addClass("hide");
    })

    $(".content-header").on("click", "button#grabar", function() {
        var codigo = document.forms["fventa"]["id_factura"].value;
        $.ajax({
            type: "get",
            url: "./Controlador/controladorVenta.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(venta) {
            if (venta.respuesta == "no existe") {
                var datos = $("#fventa").serialize();

                $.ajax({
                    type: "get",
                    url: "./Controlador/controladorVenta.php",
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
                        $("#venta").removeClass("hide");
                        $("#venta").addClass("show")
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
                    text: 'La venta ya existe!!!!!'
                })
            }
        });
    });

    $(".content-header").on("click", "a.editar", function() {
        $("#titulo").html("Editar Venta");
        //Recupera datos del formulario
        var codigo = $(this).data("codigo");

        $("#nuevo-editar").load("./Vista/Venta/editarVenta.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#venta").removeClass("show");
        $("#venta").addClass("hide");
        $.ajax({
            type: "get",
            url: "./Controlador/controladorVenta.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(venta) {
            if (venta.respuesta === "no existe") {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Venta no existe!'
                })
            } else {
                $("#id_factura").val(venta.id_factura);
                $("#id_cliente").val(venta.id_cliente);
                $("#id_Usuario").val(venta.id_Usuario);
                $("#fecha_factura").val(venta.fecha_factura);
                $("#valor_factura").val(venta.valor_factura);
                $("#descuento_total").val(venta.descuento_total);
                $("#iva_factura").val(venta.iva_factura);
                $("#neto_factura").val(venta.neto_factura);
                $("#id_formapago").val(venta.id_formapago);
                $("#online").val(venta.online);

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
        "ajax": "./Controlador/controladorVenta.php?accion=listar",
        "columns": [
            { "data": "id_factura" },
            { "data": "id_cliente" },
            { "data": "id_Usuario" },
            { "data": "fecha_factura"},
            { "data": "valor_factura"},
            { "data": "descuento_total"},
            { "data": "iva_factura"},
            { "data": "neto_factura"},
            { "data": "id_formapago"},
            { "data": "online"},

            {
                "data": "id_factura",
                render: function(data) {
                    return '<a href="#" data-codigo="' + data +
                        '" class="btn btn-danger btn-sm borrar"> <i class="fa fa-trash"></i></a>'
                }
            },
            {
                "data": "id_factura",
                render: function(data) {
                    return '<a href="#" data-codigo="' + data +
                        '" class="btn btn-info btn-sm editar"> <i class="fa fa-edit"></i></a>';
                }
            }
        ]
    });

    venta();
});