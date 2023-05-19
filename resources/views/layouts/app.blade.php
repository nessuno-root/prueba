<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Mi Sitio Web')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Template</title>
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!-- Brand logo -->
                <a class="navbar-brand" href="/">Logo</a>
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
                    aria-controls="offcanvasMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- Off-canvas menu -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-content">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/camisetas') }}">Camisetas Retro</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <form class="d-flex w-100" action="{{ route('productos.search') }}" method="GET">
                    <!-- Añadir la clase "w-100" para ocupar todo el ancho -->
                    <div class="input-group">
                        <input class="form-control" type="search" name="query" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="fas fa-search"></i> <!-- Icono de lupa -->
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="fas fa-user"></i>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user"></i> {{ Auth::user()->name }}
                            </a>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.mostrar') }}">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> <!-- Icono de logout -->
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </header>

    <!--Content of web-->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer class="bg-dark text-light py-4 custom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Elite Gods</h4>
                    <p>Dirección: 123 Calle Imaginaria, Ciudad Perdida</p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-right">
                    <h4>Enlaces</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Sobre nosotros</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Política de privacidad</a></li>
                    </ul>
                    <img src="{{ asset('logo/logo.png') }}" alt="Logo" style="height: 40px;">
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom JavaScript code -->
    <script>
        // Place your custom JavaScript code here
    </script>
</body>
