var dt;

function proveedores() {
    $(".content-header").on("click", "button#actualizar", function() {
        var datos = $("#fproveedores").serialize();
        $.ajax({
            type: "get",
            url: "./Controlador/controladorProveedores.php",
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
                $("#titulo").html("Listado proveedores");
                $("#nuevo-editar").html("");
                $("#nuevo-editar").removeClass("show");
                $("#nuevo-editar").addClass("hide");
                $("#proveedores").removeClass("hide");
                $("#proveedores").addClass("show")
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
            text: "¿Realmente desea borrar el proveedor con codigo : " + codigo + " ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borrarlo!'
        }).then((decision) => {
            if (decision.value) {

                var request = $.ajax({
                    method: "get",
                    url: "./Controlador/controladorProveedores.php",
                    data: { codigo: codigo, accion: 'borrar' },
                    dataType: "json"
                })

                request.done(function(resultado) {
                    if (resultado.respuesta == 'correcto') {
                        swal(
                            'Borrado!',
                            'El proveedor con codigo : ' + codigo + ' fue borrado',
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
        $("#titulo").html("Listado de proveedores");
        $("#nuevo-editar").html("");
        $("#nuevo-editar").removeClass("show");
        $("#nuevo-editar").addClass("hide");
        $("#proveedores").removeClass("hide");
        $("#proveedores").addClass("show");

    })

    $(".content-header").on("click", "button.btncerrar", function() {
        $("#contenedor").removeClass("show");
        $("#contenedor").addClass("hide");
        $(".content-header").html('')
    })

    $(".content-header").on("click", "button#nuevo", function() {
        $("#titulo").html("Nuevo proveedor");
        $("#nuevo-editar").load("./Vista/proveedores/nuevoProveedor.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#proveedores").removeClass("show");
        $("#proveedores").addClass("hide");
    })

    $(".content-header").on("click", "button#grabar", function() {
        var codigo = document.forms["fproveedores"]["id_proveedor"].value;
        $.ajax({
            type: "get",
            url: "./Controlador/controladorProveedores.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(proveedores) {
            if (proveedores.respuesta == "no existe") {
                var datos = $("#fproveedores").serialize();

                $.ajax({
                    type: "get",
                    url: "./Controlador/controladorProveedores.php",
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
                        $("#titulo").html("Listado proveedores");
                        $("#nuevo-editar").html("");
                        $("#nuevo-editar").removeClass("show");
                        $("#nuevo-editar").addClass("hide");
                        $("#proveedores").removeClass("hide");
                        $("#proveedores").addClass("show")
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
                    text: 'El proveedor ya existe!!!!!'
                })
            }
        });
    });

    $(".content-header").on("click", "a.editar", function() {
        $("#titulo").html("Editar proveedores");
        //Recupera datos del fromulario
        var codigo = $(this).data("codigo");

        $("#nuevo-editar").load("./Vista/proveedores/editarProveedor.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#proveedores").removeClass("show");
        $("#proveedores").addClass("hide");
        $.ajax({
            type: "get",
            url: "./Controlador/controladorProveedores.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(proveedores) {
            if (proveedores.respuesta === "no existe") {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'proveedor no existe!'
                })
            } else {
                $("#codigo").val(proveedores.codigo);
                $("#nombre_proveedor").val(proveedores.proveedor);
                $("#direccion_proveedor").val(proveedores.direccion);
                $("#telefono_proveedor").val(proveedores.telefono);
                $("#nombre_ciudad").val(proveedores.ciudad);
                $("#nombre_pais").val(proveedores.pais);
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
    $("#titulo").html("Listado de proveedores");
    dt = $("#tabla").DataTable({
        "ajax": "./Controlador/controladorProveedores.php?accion=listar",
        "columns": [
            { "data": "id_proveedor" },
            { "data": "nombre_proveedor" },
            { "data": "direccion_proveedor" },
            { "data": "telefono_proveedor" },
            { "data": "nombre_ciudad" },
            { "data": "nombre_pais" },
            {
                "data": "id_proveedor",
                render: function(data) {
                    return '<a href="#" data-codigo="' + data +
                        '" class="btn btn-danger btn-sm borrar"> <i class="fa fa-trash"></i></a>'
                }
            },
            {
                "data": "id_proveedor",
                render: function(data) {
                    return '<a href="#" data-codigo="' + data +
                        '" class="btn btn-info btn-sm editar"> <i class="fa fa-edit"></i></a>';
                }
            }
        ]
    });

    proveedores();
});