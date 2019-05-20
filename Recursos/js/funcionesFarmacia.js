var dt;

function farmacia(){
    $(".content-header").on("click", "button#actualizar", function() {
         var datos=$("#farmacia").serialize();
         $.ajax({
            type:"get",
            url:"./php/Controlador/controladorFarmacia.php",
            data: datos,
            dataType:"json"
          }).done(function( resultado ) {
              if(resultado.respuesta){
                swal(
                    'Actualizado!',
                    'Se actualizaron los datos correctamente',
                    'success'
                )     
                dt.ajax.reload();
                $("#titulo").html("Listado Comunas");
                $("#nuevo-editar").html("");
                $("#nuevo-editar").removeClass("show");
                $("#nuevo-editar").addClass("hide");
                $("#farmacia").removeClass("hide");
                $("#farmacia").addClass("show")
             } else {
                swal({
                  type: 'error',
                  title: 'Oops...',
                  text: 'Something went wrong!'                         
                })
            }
        });
    })

    $(".content-header").on("click","a.borrar",function(){
        //Recupera datos del formulario
        var codigo = $(this).data("codigo");

        swal({
              title: '¿Está seguro?',
              text: "¿Realmente desea borrar la Farmacia con codigo : " + codigo + " ?",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, Borrarlo!'
        }).then((decision) => {
                if (decision.value) {

                    var request = $.ajax({
                        method: "get",
                        url: "./php/Controlador/controladorFarmacia.php",
                        data: {codigo: codigo, accion:'borrar'},
                        dataType: "json"
                    })

                    request.done(function( resultado ) {
                        if(resultado.respuesta == 'correcto'){
                            swal(
                                'Borrado!',
                                'La Farmacia con codigo : ' + codigo + ' fue borrada',
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
                     
                    request.fail(function( jqXHR, textStatus ) {
                        swal({
                          type: 'error',
                          title: 'Oops...',
                          text: 'Something went wrong!' + textStatus                          
                        })
                    });
                }
        })

    });

    $(".content-header").on("click","button.btncerrar2",function(){
        $("#titulo").html("Listado de Farmacias");
        $("#nuevo-editar").html("");
        $("#nuevo-editar").removeClass("show");
        $("#nuevo-editar").addClass("hide");
        $("#farmacia").removeClass("hide");
        $("#farmacia").addClass("show");

    })

    $(".content-header").on("click","button.btncerrar",function(){
        $("#contenedor").removeClass("show");
        $("#contenedor").addClass("hide");
        $(".content-header").html('')
    })

    $(".content-header").on("click","button#nuevo",function(){
        $("#titulo").html("Nueva farmacia");
        $("#nuevo-editar" ).load("./vista/Farmacia/nuevoFarmacia.php"); 
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#farmacia").removeClass("show");
        $("#farmacia").addClass("hide");
    })

    $(".content-header").on("click", "button#grabar", function() {
        var codigo = document.forms["farmacia"]["id_farmacia"].value;
        $.ajax({
            type: "get",
            url: "./Controlador/controladorFarmacia.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(farmacia) {
            if (farmacia.respuesta == "no existe") {
                var datos = $("#farmacia").serialize();

                $.ajax({
                    type: "get",
                    url: "./Controlador/controladorFarmacia.php",
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
                        $("#titulo").html("Listado Farmacias");
                        $("#nuevo-editar").html("");
                        $("#nuevo-editar").removeClass("show");
                        $("#nuevo-editar").addClass("hide");
                        $("#farmacia").removeClass("hide");
                        $("#farmacia").addClass("show")
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
                    text: 'La Farmacia ya existe!!!!!'
                })
            }
        });
    });

    $(".content-header").on("click", "a.editar", function() {
        $("#titulo").html("Editar Farmacia");
        //Recupera datos del formulario
        var codigo = $(this).data("codigo");

        $("#nuevo-editar").load("./Vista/Farmacia/editarfarmacia.php");
        $("#nuevo-editar").removeClass("hide");
        $("#nuevo-editar").addClass("show");
        $("#farmacia").removeClass("show");
        $("#farmacia").addClass("hide");
        $.ajax({
            type: "get",
            url: "./Controlador/controladorFarmacia.php",
            data: { codigo: codigo, accion: 'consultar' },
            dataType: "json"
        }).done(function(farmacia) {
            if (farmacia.respuesta === "no existe") {
                swal({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Farmacia no existe!'
                })
            } else {
                $("#id_farmacia").val(farmacia.id_farmacia);
                $("#nombre_farmacia").val(farmacia.nombre_farmacia);
                $("#direccion_farmacia").val(farmacia.direccion_farmacia);
                $("#telefono_farmacia").val(farmacia.telefono_farmacia);
                $("#id_ciudad").val(farmacia.id_ciudad);
                $("#id_propietario").val(farmacia.id_propietario);
                $("#id_usuario").val(farmacia.id_usuario);

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
        "ajax": "./Controlador/controladorFarmacia.php?accion=listar",
        "columns": [
            { "data": "id_farmacia" },
            { "data": "nombre_farmacia" },
            { "data": "direccion_farmacia" },
            { "data": "telefono_farmacia"},
            { "data": "id_ciudad"},
            { "data": "id_propietario"},
            { "data": "id_usuario"},
           

            {
                "data": "id_farmacia",
                render: function(data) {
                    return '<a href="#" data-codigo="' + data +
                        '" class="btn btn-danger btn-sm borrar"> <i class="fa fa-trash"></i></a>'
                }
            },
            {
                "data": "id_farmacia",
                render: function(data) {
                    return '<a href="#" data-codigo="' + data +
                        '" class="btn btn-info btn-sm editar"> <i class="fa fa-edit"></i></a>';
                }
            }
        ]
    });

  farmacia();
});