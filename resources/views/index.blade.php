@extends('layouts.app')
@section('title', 'EliteGodS')
@section('content')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicadores del Carousel -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>

        <!-- Contenido del Carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('carousel/pele.png') }}" alt="Image 1">
                <div class="carousel-caption">
                    <h3>Camisetas Vintage</h3>

                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('carousel/maradona.png') }}" alt="Image 2">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('carousel/españa.png') }}" alt="Image 3">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controles del Carousel -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>


    <!-- En este ejemplo, utilizamos la clase "row" para crear una fila en la que colocamos tres columnas (col-4) dentro de un contenedor "row".
                         Cada columna contiene una imagen con la clase "img-thumbnail" para aplicar estilos de borde y la clase "rounded-circle" para establecer
                         el borde redondeado.   -->
    <div class="row mt-5 d-flex justify-content-between">
        <div class="col-4">
            <div class="text-center">
                <a href="#" class="d-block">
                    <img src="{{ asset('imgRedondeadas/ramos.png') }}" alt="Imagen 1" class="img-thumbnail rounded-circle">
                </a>
                <button class="btn btn-primary mt-3">Go Shop</button>
            </div>
        </div>
        <div class="col-4">
            <div class="text-center">
                <a href="#" class="d-block">
                    <img src="{{ asset('imgRedondeadas/mosqueteros.png') }}" alt="Imagen 2"
                        class="img-thumbnail rounded-circle">
                </a>
                <button class="btn btn-primary mt-3">Go Shop</button>
            </div>
        </div>
        <div class="col-4">
            <div class="text-center">
                <a href="#" class="d-block">
                    <img src="{{ asset('imgRedondeadas/cr.png') }}" alt="Imagen 3" class="img-thumbnail rounded-circle">
                </a>
                <button class="btn btn-primary mt-3">Go Shop</button>
            </div>
        </div>
    </div>


    <section class="my-5">
        <div class="container text-center">
            <h1 class="display-4">Bienvenido a nuestra tienda</h1>
            <p class="lead">Descubre nuestros productos top</p>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('imgCards/arsenal.png') }}" class="card-img-top" alt="Card 1">
                    <div class="card-body">
                        <div class="rating">
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="fas fa-star text-warning"></span>
                        </div>
                        <p class="card-text">
                            <strong>Celebra el centenario del Arsenal con esta camiseta retro que rinde homenaje a la
                                temporada
                                1985-86.
                                Con su diseño clásico y detalles auténticos, esta camiseta te transportará a una época llena
                                de emociones en la historia del club.
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('imgCards/realMadrid.png') }}" class="card-img-top" alt="Card 2">
                    <div class="card-body">
                        <div class="rating">
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="fas fa-star text-warning"></span>
                        </div>
                        <p class="card-text">
                            <strong>Luce como los jugadores del Real Madrid en la temporada
                                2015-2016 con esta camiseta oficial.
                                Con su diseño elegante y detalles auténticos, esta camiseta evoca la emoción y el orgullo
                                del equipo blanco.
                                Perfecta para los seguidores del Real Madrid que quieren mostrar su apoyo al equipo.
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('imgCards/sampdoria.png') }}" class="card-img-top" alt="Card 3">
                    <div class="card-body">
                        <div class="rating">
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="star"><i class="fas fa-star text-warning"></i></span>
                            <span class="fas fa-star text-warning"></span>
                        </div>
                        <p class="card-text">
                            <strong>Celebra la época dorada de la UC Sampdoria con esta camiseta retro que rememora la
                                temporada
                                1991/92.
                                Con su diseño icónico y los colores característicos del club, esta camiseta evoca la pasión
                                y el espíritu competitivo del equipo italiano.
                                Perfecta para los seguidores nostálgicos y devotos de la Sampdoria.
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-8">
        <h4 class="text-center">Nuestras Marcas</h4>
        <div class="d-flex justify-content-between">
            <img src="{{ asset('marcas/Copa.png') }}" alt="Marca 1" class="img-fluid">
            <img src="{{ asset('marcas/LecoqSportif.png') }}" alt="Marca 2" class="img-fluid">
            <img src="{{ asset('marcas/Pantofola.png') }}" alt="Marca 3" class="img-fluid">
            <img src="{{ asset('marcas/ScoreDraw.png') }}" alt="Marca 4" class="img-fluid">
        </div>
    </div>




@endsection
