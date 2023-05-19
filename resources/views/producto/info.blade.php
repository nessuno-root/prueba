@extends('layouts.app')
@section('title', 'EliteGodS')
@section('content')
@if (!empty($productos))
    <div class="row mt-4">
        @foreach ($productos as $producto)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="text-center">
                    <a href="{{ route('producto.show', $producto->id) }}">
                        <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}"
                            class="img-thumbnail custom-thumbnail"
                            style="max-width: 200px; height: auto; cursor: pointer;" />
                    </a>
                    <h4 class="mt-3" style="font-size: medium;color: #FFA500">{{ $producto->nombre }}</h4>
                    <p class="mb-0" style="font-size: medium;color: #FFA500">Precio: {{ $producto->precio }} €</p>
                </div>
            </div>
        @endforeach
    </div>
@endif
@endsection
