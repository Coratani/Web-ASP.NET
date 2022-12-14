<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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

<div class="row text-center">
    <div class="col-md-12">
        <h3><i class="fas fa-money-bill-wave"></i> Opciones de pago</h3>
    </div>
</div>
<div class="row">
    <div class="col-4"></div>
    <article class="card col-8 m-2">
        <div class="card-body m-2">
            <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                        <i class="fa fa-credit-card"></i> Tarjeta de credito</a></li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                        <i class="fa-brands fa-paypal"></i> Paypal</a></li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                        <i class="fa fa-university"></i> Transferencia Bancaria</a></li>
            </ul>
            <div class="tab-content cardconfig">
                <div class="tab-pane fade show active" id="nav-tab-card">
                    <p class="alert alert-success">Lugar para el mensaje correcto</p>
                    <form role="form">
                        <div class="form-group">
                            <label for="username">Nombre completo (como en la tarjeta)</label>
                            <input type="text" class="form-control" name="username" placeholder="" required="">
                        </div> <!-- form-group.// -->

                        <div class="form-group">
                            <label for="cardNumber">Numero de la tarjeta</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="cardNumber" placeholder="">
                                <div class="input-group-append">
                                                                    <span class="input-group-text text-muted">
                                                                            <i class="fab fa-cc-visa"></i>   
                                                                            <i class="fab fa-cc-amex"></i>   
                                                                            <i class="fab fa-cc-mastercard"></i> 
                                                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label><span class="hidden-xs">Fecha de expiración</span> </label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" placeholder="Mes" name="">
                                        <input type="number" class="form-control" placeholder="Año" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label data-toggle="tooltip" title="">CVV <i
                                                class="fa fa-question-circle"></i></label>
                                    <input type="number" class="form-control" required>
                                </div> <!-- form-group.// -->
                            </div>
                        </div> <!-- row.// -->
                        <button class="subscribe btn btn-primary btn-block" type="button"> Confirmar</button>
                    </form>
                </div> <!-- tab-pane.// -->
                <div class="tab-pane fade" id="nav-tab-paypal">
                    <p>Paypal es la manera más facil de pagar en internet</p>
                    <p>
                        <button type="button" class="btn btn-primary"><i class="fab fa-paypal"></i> Acceder con mi
                            Paypal
                        </button>
                    </p>
                    <p><strong>Nota:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <div class="tab-pane fade" id="nav-tab-bank">
                    <p>Detalles de la cuenta bancaria</p>
                    <dl class="param">
                        <dt>Banco:</dt>
                        <dd> Banco Mundial</dd>
                    </dl>
                    <dl class="param">
                        <dt>SWIFT:</dt>
                        <dd>ESBMXXXX</dd>
                    </dl>
                    <dl class="param">
                        <dt>IBAN:</dt>
                        <dd>1234-5678-910</dd>
                    </dl>
                    <p><strong>Nota:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
        </div>
    </article>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

<script src="js/scripts.js"></script>
</body>
</html>