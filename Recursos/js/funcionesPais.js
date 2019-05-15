var dt;

function pais() {
    $("#contenido").on("click", "button#actualizar", function() {
        var datos = $("#fpais").serialize();
        $.ajax({
            type: "get",
            url: "./Controlador/controladorPais.php",
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
                $("#pais").removeClass("hide");
                $("#pais").addClass("show")
            } else {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                })
            }
        });
    })

    $("#contenido").on("click", "a.borrar", function() {
        //Recupera datos del formulario
        var codigo = $(this).data("codigo");

        swal({
            title: '¿Está seguro?',
            text: "¿Realmente desea borrar el pais con codigo : " + codigo + " ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borrarlo!'
        }).then((decision) => {
            if (decision.value) {

                var request = $.ajax({
                    method: "get",
                    url: "./Controlador/controladorPais.php",
                    data: { codigo: codigo, accion: 'borrar' },
                    dataType: "json"
                })

                request.done(function(resultado) {
                    if (resultado.respuesta == 'correcto') {
                        swal(
                            'Borrado!',
                            'El pais con codigo : ' + codigo + ' fue borrado',
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

    $("#contenido").on("click", "button.btncerrar2", function() {
        $("#titulo").html("Listado de Paises");
        $("#nuevo-editar").html("");
        $("#nuevo-editar").removeClass("show");
        $("#nuevo-editar").addClass("hide");
        $("#pais").removeClass("hide");
        $("#pais").addClass("show");

    })

    $("#contenido").on("click", "button.btncerrar", function() {
        $("#contenedor").removeClass("show");
        $("#contenedor").addClass("hide");
        $("#contenido").html('')
    })

    $("#contenido").on("click", "button#nuevo", function() {
        $("#titulo").html("Nuevo Pais");
        $("#nuevo-editar").load("./Vista/Paises/nuevoPais.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#pais").removeClass("show");
        $("#pais").addClass("hide");
    })

    $("#contenido").on("click", "button#grabar", function() {
        var codigo = document.forms["fpais"]["id_pais"].value;
        $.ajax({
            type: "get",
            url: "./Controlador/controladorPais.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(pais) {
            if (pais.respuesta == "no existe") {
                var datos = $("#fpais").serialize();

                $.ajax({
                    type: "get",
                    url: "./Controlador/controladorPais.php",
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
                        $("#pais").removeClass("hide");
                        $("#pais").addClass("show")
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
                    text: 'El pais ya existe!!!!!'
                })
            }
        });
    });

    $("#contenido").on("click", "a.editar", function() {
        $("#titulo").html("Editar Pais");
        //Recupera datos del fromulario
        var codigo = $(this).data("codigo");

        $("#nuevo-editar").load("./Vista/Paises/editarPais.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#pais").removeClass("show");
        $("#pais").addClass("hide");
        $.ajax({
            type: "get",
            url: "./Controlador/controladorPais.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(pais) {
            if (pais.respuesta === "no existe") {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Pais no existe!'
                })
            } else {
                $("#id_pais").val(pais.codigo);
                $("#nombre_pais").val(pais.nombre_pais);
                $("#abreviatura_pais").val(pais.abreviatura_pais);

            }
        });
    })

}
$(document).ready(() => {
    $("#contenido").off("click", "a.editar");
    $("#contenido").off("click", "button#actualizar");
    $("#contenido").off("click", "a.borrar");
    $("#contenido").off("click", "button#nuevo");
    $("#contenido").off("click", "button#grabar");
    $("#titulo").html("Listado de Pais");
    dt = $("#tabla").DataTable({
        "ajax": "./Controlador/controladorPais.php?accion=listar",
        "columns": [
            { "data": "id_pais" },
            { "data": "nombre_pais" },
            { "data": "abreviatura_pais" },
            {
                "data": "id_pais",
                render: function(data) {
                    return '<a href="#" data-codigo="' + data +
                        '" class="btn btn-danger btn-sm borrar"> <i class="fa fa-trash"></i></a>'
                }
            },
            {
                "data": "id_pais",
                render: function(data) {
                    return '<a href="#" data-codigo="' + data +
                        '" class="btn btn-info btn-sm editar"> <i class="fa fa-edit"></i></a>';
                }
            }
        ]
    });

    pais();
});