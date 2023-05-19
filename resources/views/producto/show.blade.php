@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset($producto->imagen) }}" class="img-fluid" alt="Imagen del producto" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $producto->nombre }}</h4>
                        <p><strong>Descripción:</strong><br> {{ $producto->descripcion }}</p>
                        <p><strong>País:</strong> {{ $producto->pais }}</p>
                        <p><strong>Manga:</strong> {{ $producto->manga }}</p>
                        <p><strong>Material:</strong> {{ $producto->material }}</p>
                        <p><strong>Marca:</strong> {{ $producto->marca }}</p>
                        <p><strong>Price:</strong> {{ $producto->precio }}€</p>

                        <form action="{{ route('cart.agregar', $producto->id) }}" method="POST" class="d-flex justify-content-left">
                            @csrf
                            <div class="form-outline me-1" style="width: 100px;">
                                <input type="number" name="id-quantity" value="1" class="form-control" />
                            </div>
                            <button class="btn btn-primary ms-1" type="submit">
                                Add to cart
                                <i class="fas fa-shopping-cart ms-1"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
