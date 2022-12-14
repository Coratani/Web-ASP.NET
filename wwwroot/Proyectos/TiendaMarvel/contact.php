<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body id="faqBody">
<nav class="navbar navbar-expand-lg  bg-info">
    <div class="container-fluid ">

        <a class="navbar-brand" href="#">
            <img src="img/logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"/>
            Comic store
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
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
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"
                            onclick="calculatePrice()">
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
<div class="container-fluid">


</div>
<main role="main" class="permain" id="faq">

    <div class="row">
        <div class="jumbotron jumbotron-fluid p-5">
            <div class="text-center">
                <h1 class="txtjumbo">Terms & Conditions</h1>
                <p class="txtjumbo">- All user terms -</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-info" style="max-width: 18rem;">
                    <div class="card-header">1. TERMS</div>
                    <div class="card-body">
                        <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning" style="max-width: 18rem;">
                    <div class="card-header">2. CONDITIONS</div>
                    <div class="card-body">
                        <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-danger" style="max-width: 18rem;">
                    <div class="card-header">3. OBLIGATIONS</div>
                    <div class="card-body">
                        <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex text-center m-5 p-5 " id="contactForm">
        <div class="col-6 d-flex">
            <section>
                <form class="neonBlue ">
                    <h1>Contact</h1>
                    <ul id="contactInput" class="flex-column ">
                        <li><label for="formName">Name: </label>&nbsp&nbsp;<br><input type="text" maxlength="15"
                                                                                      max="15"
                                                                                      id="formName"></li>
                        <li><label for="formEmail">E-mail:&nbsp;</label><br><input type="email" id="formEmail"></li>

                        <li><label>Subject:&nbsp;</label><br><input type="text" maxlength="15"></li>
                        <br>
                        <li><textarea rows="4" cols="22" maxlength="80"></textarea></li>
                    </ul>
                    <button type="submit" id="contact" class="btn btn-danger"><label for="contact">Submit</label>
                    </button>
                </form>
            </section>
        </div>
        <div class="col-6">
            <section>
                <section class="gmap_canvas m-2 p-2">
                    <iframe width="500" height="800" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=carrer%20de%20monlau%206&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <a href="https://123movies-to.org"></a><br>
                    <style>.mapouter {
                            position: center;
                            text-align: center;
                            height: 500px;
                            width: 696px;
                        }</style>
                    <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                    <style>.gmap_canvas {
                            overflow: hidden;
                            align-self: center;
                            background: none !important;
                            height: 200px;
                            width: 690px;
                        }</style>
                </section>
            </section>
        </div>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</html>