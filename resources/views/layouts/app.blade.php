<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedia</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">

    @vite([
    'resources/css/app.css',
    'resources/js/app.js',
    'resources/js/header.js'
    ])

</head>

<body class="@yield('body-class')">

    {{-- Header --}}
    @include('partials.header')

    {{-- Contenido --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Scripts por página --}}
    @stack('scripts')

</body>

</html>
