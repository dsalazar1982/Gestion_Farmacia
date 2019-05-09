<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>MultiFarma</title>
</head>

<body> 

    <div class=" row container-fluid bg-primary">
        <div class="col-10 display-1 text-white text-center">
            MultiFarma
        </div>

        <div class="col-2">
            <form>
                <div class="form-group">
                    <!-- <label for="user">Usuario</label> -->
                    <input type="text" class="form-control" id="user" placeholder="Ingrese su usuario">
                </div>
                <div class="form-group">
                    <!--<label for="clave">Clave</label> -->
                    <input type="password" class="form-control" id="clave" placeholder="Ingrese su clave">
                </div>
                <button type="submit" class="btn btn-secondary">Ingresar</button>
            </form>
        </div>
    </div>


    <div>
        <p>
        </p>
    </div>

    <div class="container row">
        <div class="col-4" id="menu-lateral">
            <div class="btn-group-vertical">
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de clientes</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de empleados</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de propietarios</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de usuarios</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de proveedores</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de farmacias</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de productos</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de inventarios</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de ciudades</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de paises</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de facturas</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de informes</strong></button>
                <button type="button" class="btn btn-outline-secondary btn-lg"><strong>Gestion de nomina</strong></button>
            </div>
        </div>

        <div class="col-8" name="body">
            <div name="slide-body">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./images/slide1.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/slide2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./images/slide3.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="menu-interno" class="bg-success">
                <p></p>
                <button>Categorias</button>
                <p></p>
            </div>

            <div id="text-body">
                <h4>What is Lorem Ipsum?
                </h4>
                <p class="text-justify"><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <h4>Where does it come from?
                </h4>
                <p class="text-justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                </p>
                <h4>Why do we use it?
                </h4>
                <p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
                <h4>Where can I get some?
                </h4>
                <p class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-info">
        <p class="text-center text-white">
            Todos los derechos reservados: <br>
    <strong>Miguel Angel Cerquera Rodriguez</strong><br>
            <strong>Daniel Alberto Salazar Erazo</strong><br>
            <strong>Gelder Steven Arcila Pardo</strong><br>
    <strong>Cristian David Moreno Buitrago</strong><br>
        </p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 