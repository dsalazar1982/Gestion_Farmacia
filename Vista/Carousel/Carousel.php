<?php //include_once ("../../Funciones/sessiones.php"); ?>
     
     <h1>
        Configuración del
        <small> Carousel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Carousel</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Imagenes del Carousel</h3>
              <div class="box-tools pull-right">
                  <button class="btn btn-info btn-sm" id="nuevo"  data-toggle="tooltip" 
                      title="Nueva Rol"><i class="fa fa-plus" aria-hidden="true"></i></button> 
              </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
	
    <div class="carousel-inner">
     <div class="carousel-item active" align="center">
      <img src="Recursos/img/photo3.jpg" class="d-block w-100" alt="No disponible" style="height: 160px">
    </div>
	  
     <div class="carousel-item" align="center">
      <img src="Recursos/img/photo4.jpg" class="d-block w-100" alt="No disponible" style="height: 160px">
     </div>
    </div>
	
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
    </a>
	
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
    </a>
   </div>	
   <h1 style="font-size: 20px;color: teal;font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif';text-align: center">Menu Productos</h1>
	
<script src="./Recursos/js/funcionesRoles.js"></script>
<!-- Funciones de Lógica de neogcio -->
<script>
    $(document).ready(roles);
</script>
