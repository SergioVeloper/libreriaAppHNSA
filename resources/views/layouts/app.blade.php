<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- Agregar Tailwind CSS a través de la CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Contenido del encabezado -->
    </header>

    <main class="p-6">
        @yield('content')
    </main>

    <footer>
        <!-- Contenido del pie de página -->
    </footer>
</body>
</html>
