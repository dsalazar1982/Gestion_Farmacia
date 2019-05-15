function roles(){

    var dt = $("#tabla").DataTable({
            "ajax": "./Controlador/controladorRoles.php?accion=listar",
            "columns": [
                { "data": "id_rol"} ,
                { "data": "nombre_rol" },
                { "data": "id_rol",
                  render: function (data) {
                            return '<a href="#" data-codigo="'+ data + 
                                   '" class="btn btn-danger btn-sm borrar"> <i class="fa fa-trash"></i></a> '
                            +      '<a href="#" data-codigo="'+ data + 
                                   '" class="btn btn-info btn-sm editar"> <i class="fa fa-edit"></i></a>'
                  }
              }
            ]
    });

  $("#editar").on("click",".btncerrar", function(){
      $(".box-title").html("Listado de Roles");
      $("#editar").addClass('hide');
      $("#editar").removeClass('show');
      $("#listado").addClass('show');
      $("#listado").removeClass('hide');  
      $(".box #nuevo").show(); 
  })  

  $(".box").on("click","#nuevo", function(){
      $(this).hide();
      $(".box-title").html("Crear Rol");
      $("#editar").addClass('show');
      $("#editar").removeClass('hide');
      $("#listado").addClass('hide');
      $("#listado").removeClass('show');
      $("#editar").load('./Vista/roles/nuevoRol.php', function(){
      
      });
      
  })

  $("#editar").on("click","button#grabar",function(){
    var datos=$("#frol").serialize();
    //console.log(datos);
    $.ajax({
          type:"post",
          url:"./Controlador/controladorRoles.php",
          data: datos,
          dataType:"json"
        }).done(function( resultado ) {
            if(resultado.respuesta){
        var id_rol = document.forms["frol"]["id_rol"].value;    
        $.ajax({
            type:"post",
            url:"./Controlador/controladorrolesxPermisos.php",
            data: {codigo: id_rol, accion:'nuevo'},
            dataType:"json"  
        }).done(function(resultado){
            if(resultado.respuesta){
                $.ajax({
                    type:"post",
                    url:"./Controlador/controladorrolesxPermisos.php",
                    data: {codigo: id_rol, accion:'consultar'},
                    dataType:"json"  
                }).done(function(id_rolxpermiso){
                 if(id_rolxpermiso.respuesta == 'existe'){
                    $.ajax({
                        type:"post",
                        url:"./Controlador/controladorrolesxPermisos.php",
                        data: {codigo: id_rolxpermiso.codigo, accion:'editar'},
                        dataType:"json"
                    }).done(function (resultado){
                     if(resultado.respuesta){
                        swal({
                            position: 'center',
                            type: 'success',
                            title: 'El rol fue grabado con éxito',
                            showConfirmButton: false,
                            timer: 1200
                        })     
                            $(".box-title").html("Listado de Roles");
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
       var datos=$("#frol").serialize();
       console.log(datos);
       $.ajax({
          type:"post",
          url:"./Controlador/controladorRoles.php",
          data: datos,
          dataType:"json"
        }).done(function( resultado ) {
            if(resultado.respuesta){  
            var id_rol = document.forms["frol"]["id_rol"].value;  
           $.ajax({
            url:"./Controlador/controladorrolesxPermisos.php",
            data: {codigo: id_rol, accion:'consultar'},
            dataType:"json"    
           }).done(function(id_rolxpermiso){
            if(id_rolxpermiso.respuesta == 'existe'){
                $.ajax({
                    type:"post",
                    url:"./Controlador/controladorrolesxPermisos.php",
                    data: {codigo: id_rolxpermiso.codigo, accion:'editar'},
                    dataType:"json"
                }).done(function (resultado){
                 if(resultado.respuesta){
                    swal({
                        position: 'center',
                        type: 'success',
                        title: 'Se actualizaron los datos correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    }) 
                    $(".box-title").html("Listado de Roles");
                    $("#editar").html('');
                    $("#editar").addClass('hide');
                    $("#editar").removeClass('show');
                    $("#listado").addClass('show');
                    $("#listado").removeClass('hide');
                    dt.ajax.reload(null, false);   
                 }
                 });     
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
            text: "¿Realmente desea borrar el rol con codigo : " + codigo + " ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Borrarlo!'
      }).then((decision) => {
              if (decision.value) {
                  var request = $.ajax({
                      method: "post",                  
                      url: "./Controlador/controladorrolesxPermisos.php",
                      data: {codigo: codigo, accion:'borrar'},
                      dataType: "json"
                  })
                  request.done(function( resultado ) {
                      if(resultado.respuesta == 'correcto'){
                        var request = $.ajax({
                            method: "post",                  
                            url: "./Controlador/controladorRoles.php",
                            data: {codigo: codigo, accion:'borrar'},
                            dataType: "json"
                        })
                        request.done(function( resultado ) {
                        if(resultado.respuesta == 'correcto'){
                            swal({
                                position: 'center',
                                type: 'success',
                                title: 'El rol con codigo ' + codigo + ' fue borrado',
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

     $(".box-title").html("Actualizar Rol")
     $("#editar").addClass('show');
     $("#editar").removeClass('hide');
     $("#listado").addClass('hide');
     $("#listado").removeClass('show');
     $("#editar").load("./Vista/roles/editarRol.php",function(){
          $.ajax({
              type:"post",
              url:"./Controlador/controladorRoles.php",
              data: {codigo: codigo, accion:'consultar'},
              dataType:"json"
              }).done(function( rol ) {        
                  if(rol.respuesta === "no existe"){
                      swal({
                      type: 'error',
                      title: 'Oops...',
                      text: 'Rol no existe!'                         
                      })
                  } else {
                      $("#id_rol").val(rol.codigo);                   
                      $("#nombre_rol").val(rol.nombre);
                  }
          });
                $.ajax({
                    type:"post",
                    url:"./Controlador/controladorrolesxPermisos.php",
                    data: {codigo: codigo, accion:'listar'},
                    dataType:"json"
                }).done(function( resultado ) {
                    var i = 1;
                    $.each(resultado.data, function (index, value) {       
                            if(value.estado_rolxpermiso == 1){
                             $("#"+i+"").prop('checked',true);
                            } 
                            else { 
                             $("#"+i+"").prop('checked',false);
                        i++;      
                        }
                    i=0;
                    });
                });
      });
  })
}
