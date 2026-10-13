<article class="card">
    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="card-img">
    <div class="card-body">
        <span class="card-category">{{ $product->category }}</span>
        <h2 class="card-title">{{ $product->name }}</h2>
        <p class="card-description">{{ $product->description }}</p>
        <div class="card-footer">
            <span class="card-price">{{ number_format($product->price, 2, ',', '.') }} €</span>
            @if ($product->stock > 0)
                <span class="card-stock">En stock: {{ $product->stock }}</span>
            @else
                <span class="card-stock out">Agotado</span>
            @endif
        </div>
        <button class="btn" @disabled($product->stock === 0)>Añadir al carrito</button>
    </div>
</article>
