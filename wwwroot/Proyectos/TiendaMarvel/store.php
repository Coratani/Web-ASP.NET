<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Store</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="https://kit.fontawesome.com/7652d2555d.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-info">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="img/logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"/>
            Comic store
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i>
                        Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="store.php"><i class="fa-solid fa-store"></i> Shop</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        More...
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Forums <i class="fa-regular fa-comments"></i></a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="contact.php">Contact <i class="fa-solid fa-circle-info"></i></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#ventanamodal">Log-in <i
                                class="fas fa-sign-in-alt"></i></a>
                </li>
                <li>
                    <button class="btn btn-primary" id="cart" type="button" onclick="calculatePrice()"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                            aria-controls="offcanvasExample">
                        Cart <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid" id="content">
    <div class="row " id="marvel-row">


    </div>


</div>

<footer class="footer bg-info pt-2">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2022 Company, Inc</p>
</footer>
<!--Modal registro-->
<div class="modal fade" tabindex="-1" aria-hidden="true" id="ventanamodal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modalestilo">
            <div class="modal-header">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-login-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-login" role="tab" aria-controls="nav-login" aria-selected="true"><i
                                    class="fas fa-hand-spock"></i> Login</a>
                        <a class="nav-item nav-link" id="nav-registro-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-registro" role="tab" aria-controls="nav-registro" aria-selected="false"><i
                                    class="fas fa-user"></i> Registro</a>
                        <a class="nav-item nav-link" id="nav-recordar-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-recordar" role="tab" aria-controls="nav-recordar" aria-selected="false"><i
                                    class="fas fa-key"></i> Recordar</a>
                    </div>
                </nav>

            </div>
            <div class="modal-body">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-login" role="tabpanel"
                         aria-labelledby="nav-login-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="img/69login.png" class="rounded-circle mx-auto d-block" width="150"
                                     height="150" alt="login iamge">
                                <form>
                                    <input type="text" class="form-control col-md-8 mx-1 d-block pestcontent p-1"
                                           id="usr" placeholder="Introduce el usuario">
                                    <input type="password" class="form-control col-md-8 mx-1 d-block pestcontent p-2"
                                           id="pwd" placeholder="Introduce la contraseña">
                                    <button type="button"
                                            class="btn btn-primary btn-lg col-md-8 mx-auto d-block pestcontent p-2"
                                            onClick="javascript:validar()">Acceder
                                    </button>
                                    <div class="custom-control custom-checkbox col-md-8 mx-1 d-block pestcontent">
                                        <input type="checkbox" class="custom-control-input" id="customCheck"
                                               name="example1">
                                        <label class="custom-control-label float-right"
                                               for="customCheck">Recuérdame</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-registro" role="tabpanel" aria-labelledby="nav-registro-tab">
                        <form>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nomregnue" class="col-md-6">Nombre</label>
                                    <input type="text" name="nomregnue">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="emailregnue" class="col-md-6">Email</label>
                                    <input type="text" name="emailregnue">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="usuregnue" class="col-md-6">Usuario</label>
                                    <input type="text" name="usuregnue">
                                </div>
                            </div>
                            <div class="form-row col-md-12 pestabs">
                                <div class="col-md-7">Sexo</div>
                                <div class="custom-control custom-radio custom-control-inline center">
                                    <input type="radio" class="custom-control-input" id="rhombre" name="optradio">
                                    <label class="custom-control-label" for="rhombre">Hombre</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="rmujer" name="optradio">
                                    <label class="custom-control-label" for="rmujer">Mujer</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="fechanac" class="col-md-6">Fecha nacimiento</label>
                                    <input type="date" class="custom-select col-md-5" name="fechanac">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="pais" class="col-md-6">País</label>
                                    <select class="custom-select col-md-5" id="pais">
                                        <option selected>Seleccione el país</option>
                                        <option value="1">España</option>
                                        <option value="2">Alemania</option>
                                        <option value="3">Italia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="color" class="col-md-6">Color principal perfil</label>
                                    <input type="color" name="color" id="color" value="#000000" list="colores"/>
                                    <datalist id="colores">
                                        <option>#ff0000</option>
                                        <option>#0000ff</option>
                                        <option>#00ff00</option>
                                        <option>#ffff00</option>
                                        <option>#00ffff</option>
                                    </datalist>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox was-validated pestabs float-right">
                                <input type="checkbox" class="custom-control-input" id="cacep" required>
                                <label class="custom-control-label" for="cacep">Acepta las condiciones de uso</label>
                            </div>
                            <button type="button" class="btn btn-primary btn-lg btn-block">Registrarme</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-recordar" role="tabpanel" aria-labelledby="nav-recordar-tab">
                        <div class="form-group">
                            <label for="email" class="text-justify pestabs">Por favor introduzca su cuenta de correo
                                electrónico, le enviaremos un correo electrónico donde encontrará los pasos necesarios
                                para recuperar su contraseña.</label>
                            <input type="email" id="emailreco" class="form-control" name="emailreco"
                                   placeholder="Introduzca la dirección email">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg float-right"
                                   value="Recuperar contraseña">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer mx-auto d-block">
                <i class="fas fa-thumbs-up"></i> Visítanos en :
                <a href="#"><i class="fab fa-facebook"></i> FaceBook</a> /
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a> /
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="cardModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <!--Cuerpo -->
            <div class="modal-body">
                <img id="oop" src="" class="img-fluid fit-image" alt="">
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Modal tarjetas-->

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

<script src="js/store.js"></script>
<!--Carrito offcanvas-->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div id="cart">
            <p>Your cart is empty</p>
        </div>
        <div class="dropdown mt-3">
            <button class="btn btn-primary " type="button">
                Checkout
            </button>
        </div>
    </div>
</div>


</body>
</html>