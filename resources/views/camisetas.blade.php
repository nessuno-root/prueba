@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <div class="container">
      <img src="{{ asset('jumbotron/jumbotron.png') }}" alt="Imagen del Jumbotron" class="img-fluid">
      <h1 class="display-4">Título del Jumbotron</h1>
      <p class="lead">Descripción del Jumbotron</p>
    </div>
  </div>

    <div class="product-container">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($camisetas as $camiseta)
                <div class="col">
                    <div class="card border-0">
                        <img src="{{ asset($camiseta->imagen) }}" alt="Imagen de la camiseta" class="card-img-top"
                            style="cursor: pointer;"
                            onclick="redirectToProducto('{{ route('producto.show', ['id' => $camiseta->id]) }}')">
                        <div class="card-body text-center">
                            <h3 class="card-title" style="font-size: medium; color: #FFA500">{{ $camiseta->nombre }}</h3>
                            <p class="card-text" style="font-size: medium; color: #FFA500">{{ $camiseta->precio }}€</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination-container">
            {{ $camisetas->render('pagination::bootstrap-5') }}
        </div>
    </div>
    <!-- Javascript Function for redirection! -->
    <script>
        function redirectToProducto(url) {
            window.location.href = url;
        }
    </script>
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            color: #FFA500;
            border-color: #FFA500;
        }

        .pagination .page-link:hover {
            background-color: #FFA500;
            color: white;
        }

        .pagination .page-link:focus {
            box-shadow: none;
        }
    </style>
@endsection
