@extends('layouts.app')

@section('title', 'Inicio | Tienda Online')

@section('content')
    <section class="hero">
        <h1>Nuestros productos</h1>
        <p>{{ $products->count() }} productos disponibles</p>
    </section>

    <section class="grid">
        @forelse ($products as $product)
            @include('partials.product', ['product' => $product])
        @empty
            <p>No hay productos disponibles.</p>
        @endforelse
    </section>
@endsection
