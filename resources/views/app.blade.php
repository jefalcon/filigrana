<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

    <title>Filigrana Creditos</title>

</head>

<body>

    <!--========================================================== -->
    <!-- MENU -->
    <!--========================================================== -->


    <nav class="navbar navbar-expand-lg navbar-light p-3" id="menu">
        <div class="container">
            <!-- ENCABEZADO -->
            <header class="container-fluid bg-white d-flex">
                <div class="row">
                    <div class="col-1">
                        <a class="navbar-brand" href="/">
                            <img src="{{asset('./images/fili logo.png')}}" alt="" width="90 height=" 50">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="" row">
                        <p class="text-center text-danger mb-0 p-2 fs-6 fw-bold">Filigrana Créditos</p>
                    </div>
                    <div class="" row">
                        <p class="text-center text-dark mb-0 p-2 fs-6">Consolidando iniciativas</p>
                    </div>
                </div>
        </div>
        </header>
        <!-- OPCIONES MENÚ -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <!-- ms-auto es lo que lleva el menu a la izquierda-->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Créditos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/prestamopersonal">Prestamos personales</a></li>
                        <li><a class="dropdown-item" href="/arrendamiento">Arrendamientos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto/crear">Contacto</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/test">Test</a>
                </li> --}}
            </ul>
        </div>

        </div>
    </nav>

    @yield('content')

    <!--========================================================== -->
    <!--FOOTER-->
    <!--========================================================== -->


    <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">Filigrana Creditos &copy; Todos Los Derechos Reservados 2022</p>
        <div id="iconos">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>

    </body>

</html>