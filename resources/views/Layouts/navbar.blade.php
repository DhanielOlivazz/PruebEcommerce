<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('titulo')</title>
</head>
<body class="bg-gray-100">
    <!-- Menú de navegación -->
    <nav class="bg-violet-600 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-2xl font-semibold">Tienda Yi-Cell</a>
            <ul class="flex space-x-6">
                <li><a href="{{ url('/Inicio') }}" class="text-white hover:text-gray-300">Inicio</a></li>
                <li><a href="{{ url('/Tienda') }}" class="text-white hover:text-gray-300">Tienda</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Servicios</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <!-- Contenido dinámico -->
    <div class="container mx-auto p-6">
        @yield('contenido')
    </div>
</body>
</html>
