<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tienda Online')</title>
    <link rel="stylesheet" href="{{ asset('css/tienda.css') }}">
</head>
<body>
    <header class="header">
        <div class="container header-inner">
            <a href="{{ route('home') }}" class="logo">TiendaOnline</a>
            <nav class="nav">
                <a href="{{ route('home') }}">Inicio</a>
                <a href="#">Ofertas</a>
                <a href="#">Contacto</a>
                <a href="#" class="cart">Carrito (0)</a>
            </nav>
        </div>
    </header>

    <main class="container main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            &copy; {{ date('Y') }} TiendaOnline
        </div>
    </footer>
</body>
</html>
