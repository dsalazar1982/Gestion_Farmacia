var dt;

function proveedor() {
    $(".content-header").on("click", "button#actualizar", function() {
        var datos = $("#fproveedor").serialize();
        $.ajax({
            type: "get",
            url: "./Controlador/controladorProveedor.php",
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
                $("#titulo").html("Listado Proveedor");
                $("#nuevo-editar").html("");
                $("#nuevo-editar").removeClass("show");
                $("#nuevo-editar").addClass("hide");
                $("#proveedor").removeClass("hide");
                $("#proveedor").addClass("show")
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
                    url: "./Controlador/controladorProveedor.php",
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
        $("#titulo").html("Listado de Proveedores");
        $("#nuevo-editar").html("");
        $("#nuevo-editar").removeClass("show");
        $("#nuevo-editar").addClass("hide");
        $("#proveedor").removeClass("hide");
        $("#proveedor").addClass("show");

    })

    $(".content-header").on("click", "button.btncerrar", function() {
        $("#contenedor").removeClass("show");
        $("#contenedor").addClass("hide");
        $(".content-header").html('')
    })

    $(".content-header").on("click", "button#nuevo", function() {
        $("#titulo").html("Nuevo Proveedor");
        $("#nuevo-editar").load("./Vista/Paises/nuevoProveedor.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#proveedor").removeClass("show");
        $("#proveedor").addClass("hide");
    })

    $(".content-header").on("click", "button#grabar", function() {
        var codigo = document.forms["fproveedor"]["id_proveedor"].value;
        $.ajax({
            type: "get",
            url: "./Controlador/controladorProveedor.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(proveedor) {
            if (proveedor.respuesta == "no existe") {
                var datos = $("#fproveedor").serialize();

                $.ajax({
                    type: "get",
                    url: "./Controlador/controladorProveedor.php",
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
                        $("#provedor").removeClass("hide");
                        $("#proveedor").addClass("show")
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
        $("#titulo").html("Editar Proveedor");
        //Recupera datos del fromulario
        var codigo = $(this).data("codigo");

        $("#nuevo-editar").load("./Vista/Proveedor/editarProveedor.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#proveedor").removeClass("show");
        $("#proveedor").addClass("hide");
        $.ajax({
            type: "get",
            url: "./Controlador/controladorProveedor.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(proveedor) {
            if (proveedor.respuesta === "no existe") {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Proveedor no existe!'
                })
            } else {
                $("#id_priveedor").val(proveedor.codigo);
                $("#nombre_proveedor").val(proveedor.proveedor);
                $("#direccion_proveedor").val(proveedor.direccion);
                $("#telefono_proveedor").val(proveedor.telefono);
                $("#id_pais").val(proveedor.pais);
                $("#id_ciudad").val(proveedor.ciudad);
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
    $("#titulo").html("Listado de Proveedores");
    dt = $("#tabla").DataTable({
        "ajax": "./Controlador/controladorProveedor.php?accion=listar",
        "columns": [
            { "data": "id_proveedor" },
            { "data": "nombre_proveedor" },
            { "data": "direccion_proveedor" },
            { "data": "telefono_proveedor" },
            { "data": "id_ciudad" },
            { "data": "id_pais" },
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

    proveedor();
});