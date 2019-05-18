function usuarios(){
    
    var dt = $("#tabla").DataTable({
            "ajax": "./Controlador/controladorUsuarios.php?accion=listar",
            "columns": [
                { "data": "id_usuario"} ,
                { "data": "nickname_usuario" },
                { "data": "clave_usuario" },
                { "data": "nombre_estado" },
                { "data": "nombre_rol" },
                { "data": "fechacreacion_usuario" },
              { "data": "id_usuario",
                  render: function (data) {
                            return '<a href="#" data-codigo="'+ data + 
                                   '" class="btn btn-danger btn-sm borrar"> <i class="fa fa-trash"></i></a>'
                            +      '<a href="#" data-codigo="'+ data + 
                                   '" class="btn btn-info btn-sm editar"> <i class="fa fa-edit"></i></a>'
                  }
              }
            ]
    });

    
  $("#editar").on("click",".btncerrar", function(){
      $(".box-title").html("Listado de Usuarios");
      $("#editar").addClass('hide');
      $("#editar").removeClass('show');
      $("#listado").addClass('show');
      $("#listado").removeClass('hide');  
      $(".box #nuevo").show(); 
  })  

  $(".box").on("click","#nuevo", function(){
      $(this).hide();
      $(".box-title").html("Crear Usuario");
      $("#editar").addClass('show');
      $("#editar").removeClass('hide');
      $("#listado").addClass('hide');
      $("#listado").removeClass('show');
      $("#editar").load('./Vista/Usuarios/nuevoUsuario.php', function(){            
          $.ajax({
             type:"get",
             url:"./Controlador/controladorEstados.php",
             data: {accion:'listar'},
             dataType:"json"
          }).done(function( resultado ) {                    ;
              $.each(resultado.data, function (index, value) { 
                $("#editar #id_estado").append("<option value='" + value.id_estado + "'>" + value.nombre_estado + "</option>")
              });
          });
          $.ajax({
            type:"get",
            url:"./Controlador/controladorRoles.php",
            data: {accion:'listar'},
            dataType:"json"
         }).done(function( resultado ) {                    ;
             $.each(resultado.data, function (index, value) { 
               $("#editar #id_rol").append("<option value='" + value.id_rol + "'>" + value.nombre_rol + "</option>")
             });
         });
         $.ajax({
            type:"get",
            url:"./Controlador/controladorEmpleados.php",
            data: {accion:'listarE'},
            dataType:"json"
         }).done(function( resultado ) {                    ;
             $.each(resultado.data, function (index, value) { 
               $("#editar #id_empleado").append("<option value='" + value.id_empleado + "'>" + value.nombre_empleado+" "+value.apellido_empleado +"</option>")
             });
         });
      });
  })

  $("#editar").on("click","button#grabar",function(){
    var datos=$("#fusuario").serialize();
    var id_empleado = document.forms['fusuario']['id_empleado'].value;
    //console.log(datos);
    $.ajax({
          type:"get",
          url:"./Controlador/controladorUsuarios.php",
          data: datos,
          dataType:"json"
        }).done(function( resultado ) {
            if(resultado.respuesta){
                $.ajax({
                    type:"get",
                    url:"./Controlador/controladorUsuarios.php",
                    data: {accion:'identificarM'},
                    dataType:"json"
                    }).done(function(resultado){
                    var id_usuario = resultado.id_usuario;
                    if(resultado.respuesta){
                        $.ajax({
                            type:"get",
                            url:"./Controlador/controladorusuariosxEmpleados.php",
                            data: {codigo: id_empleado, codigoU: id_usuario, accion:'nuevo'},
                            dataType:"json"
                            }).done(function(resultado){
                            if(resultado.respuesta){
                                swal({
                                    position: 'center',
                                    type: 'success',
                                    title: 'La comuna fue grabada con éxito',
                                    showConfirmButton: false,
                                    timer: 1200
                                })     
                                    $(".box-title").html("Listado de Usuarios");
                                    $(".box #nuevo").show();
                                    $("#editar").html('');
                                    $("#editar").addClass('hide');
                                    $("#editar").removeClass('show');
                                    $("#listado").addClass('show');
                                    $("#listado").removeClass('hide');
                                    dt.page( 'last' ).draw( 'page' );
                                    dt.ajax.reload(null, false);       
                            }    
                            });     
                    }    
                    });                  
           } else {
              swal({
                  position: 'center',
                  type: 'error',
                  title: 'Ocurrió un erro al grabar',
                  showConfirmButton: false,
                  timer: 1500
              });
             
          }
      });
  });

  $("#editar").on("click","button#actualizar",function(){
       var datos=$("#fusuario").serialize();
     // console.log(datos);
       $.ajax({
          type:"get",
          url:"./Controlador/controladorUsuarios.php",
          data: datos,
          dataType:"json"
        }).done(function( resultado ) {
 
            if(resultado.respuesta){    
                $.ajax({
                    type:"get",
                    url:"./Controlador/controladorusuariosxEmpleados.php",
                    data: datos,
                    dataType:"json"
                  }).done(function( resultado ) {
                   if(resultado.respuesta){
                    swal({
                        position: 'center',
                        type: 'success',
                        title: 'Se actaulizaron los datos correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }) 
                    $(".box-title").html("Listado de Usuarios");
                    $("#editar").html('');
                    $("#editar").addClass('hide');
                    $("#editar").removeClass('show');
                    $("#listado").addClass('show');
                    $("#listado").removeClass('hide');
                    dt.ajax.reload(null, false);       
                   }
                  }); 
           } else {
              swal({
                type: 'error',
                title: 'Oops...',
                text: 'Something went wrong!'                         
              })
          }
      });
  })

  $(".box-body").on("click","a.borrar",function(){
      //Recupera datos del formulario
      var codigo = $(this).data("codigo");
      
      swal({
            title: '¿Está seguro?',
            text: "¿Realmente desea borrar el usuario con codigo : " + codigo + " ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borrarlo!'
      }).then((decision) => {
              if (decision.value) {
                  var request = $.ajax({
                      method: "get",                  
                      url: "./Controlador/controladorusuariosxEmpleados.php",
                      data: {codigo: codigo, accion:'borrar'},
                      dataType: "json"
                  })
                  request.done(function( resultado ) {
                      if(resultado.respuesta == 'correcto'){
                        var request = $.ajax({
                            method: "get",                  
                            url: "./Controlador/controladorUsuarios.php",
                            data: {codigo: codigo, accion:'borrar'},
                            dataType: "json"
                        })
                        request.done(function( resultado ) {
                        if(resultado.respuesta == 'correcto'){
                            swal({
                                position: 'center',
                                type: 'success',
                                title: 'La comuna con codigo ' + codigo + ' fue borrada',
                                showConfirmButton: false,
                                timer: 1500
                              })       
                              var info = dt.page.info();   
                              if((info.end-1) == info.length)
                                  dt.page( info.page-1 ).draw( 'page' );
                              dt.ajax.reload(null, false);
                        }    
                        });   
                          
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
  
  $(".box-body").on("click","a.editar",function(){
     //$("#titulo").html("Editar Comuna");
     //Recupera datos del fromulario
     var codigo = $(this).data("codigo");
     var estado, rol , id_usuario;
     $(".box-title").html("Actualizar Usuario")
     $("#editar").addClass('show');
     $("#editar").removeClass('hide');
     $("#listado").addClass('hide');
     $("#listado").removeClass('show');
     $("#editar").load("./Vista/Usuarios/editarUsuario.php",function(){
          $.ajax({
              type:"get",
              url:"./Controlador/controladorUsuarios.php",
              data: {codigo: codigo, accion:'consultar'},
              dataType:"json"
              }).done(function( usuario ) {        
                  if(usuario.respuesta === "no existe"){
                      swal({
                      type: 'error',
                      title: 'Oops...',
                      text: 'Comuna no existe!'                         
                      })
                  } else {
                      $("#id_usuario").val(usuario.codigo);                   
                      $("#nickname_usuario").val(usuario.nickname);
                      $("#clave_usuario").val(usuario.clave);
                      estado = usuario.estado;
                      rol = usuario.rol;
                      id_usuario = usuario.codigo;
                      $("#fechacreacion_usuario").val(usuario.fecha);
                  }
          });

          $.ajax({
              type:"get",
              url:"./Controlador/controladorEstado.php",
              data: {accion:'listar'},
              dataType:"json"
          }).done(function( resultado ) {                      
              $.each(resultado.data, function (index, value) { 
              if(estado === value.id_estado){
                  $("#editar #id_estado").append("<option selected value='" + value.id_estado + "'>" + value.nombre_estado + "</option>")
              }else {
                  $("#editar #id_estado").append("<option value='" + value.id_estado + "'>" + value.nombre_estado + "</option>")
              }
              });
          });
          $.ajax({
            type:"get",
            url:"./Controlador/controladorRoles.php",
            data: {accion:'listar'},
            dataType:"json"
        }).done(function( resultado ) {                      
            $.each(resultado.data, function (index, value) { 
            if(rol === value.id_rol){
                $("#editar #id_rol").append("<option selected value='" + value.id_rol + "'>" + value.nombre_rol + "</option>")
            }else {
                $("#editar #id_rol").append("<option value='" + value.id_rol + "'>" + value.nombre_rol + "</option>")
            }
            });
        });
        $.ajax({
            type:"get",
            url:"./Controlador/controladorusuariosxEmpleados.php",
            data: {codigo: id_usuario, accion:'consultar'},
            dataType:"json"
        }).done(function( id_empleado ) {
          if(id_empleado.respuesta == 'existe'){
            $.ajax({
                type:"get",
                url:"./Controlador/controladorusuariosxEmpleados.php",
                data: {codigo: id_empleado.codigo, accion:'consultar'},
                dataType:"json"
                }).done(function( usuariosxempleados ) {        
                    if(usuariosxempleados.respuesta === "no existe"){
                        swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Comuna no existe!'                         
                        })
                    } else {
                        empleado = usuariosxempleados.empleado;   
                    }
            });
            $.ajax({
                type:"get",
                url:"./Controlador/controladorEmpleados.php",
                data: {accion:'listarE'},
                dataType:"json"
            }).done(function( resultado ) {                      
                $.each(resultado.data, function (index, value) { 
                if(empleado === value.id_empleado){
                    $("#editar #id_empleado").append("<option selected value='" + value.id_empleado + "'>" + value.nombre_empleado+" "+value.apellido_empleado + "</option>")
                }else {
                    $("#editar #id_empleado").append("<option value='" + value.id_empleado + "'>" + value.nombre_empleado+" "+value.apellido_empleado + "</option>")
                }
                });
            });
          }
        });
      });
  })
}
