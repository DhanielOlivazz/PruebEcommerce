@extends('Layouts.navbar')

@section('titulo', 'Tienda')

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Texto -->
    <p class="text-2xl m-8 text-center">Categorias</p>

    <!-- Tarjeta de categorias -->
    <div class="flex justify-center gap-6" >
        <div class="max-w-xs rounded-2xl overflow-hidden shadow-lg bg-white">
            <img class="w-full h-40 object-cover" src="https://res.cloudinary.com/cook-becker/image/fetch/q_auto:best,f_auto,w_1920,g_center/https://candb.com/site/candb/images/article/take-your-heart_persona-5_article.jpg" alt="Categoría">
            
            <div class="p-4">
                <h5 class="text-xl font-semibold text-gray-800">Accesorios</h5>
                <p class="text-gray-600 text-sm mt-2">
                    Explora lo último en gadgets y complementos para tus dispositivos.
                </p>
                
                <a href="#" class="mt-4 inline-block bg-violet-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-violet-900 transition">
                    Ver más
                </a>
            </div>
        </div>    
        <div class="max-w-xs rounded-2xl overflow-hidden shadow-lg bg-white">
            <img class="w-full h-40 object-cover" src="https://res.cloudinary.com/cook-becker/image/fetch/q_auto:best,f_auto,w_1920,g_center/https://candb.com/site/candb/images/article/take-your-heart_persona-5_article.jpg" alt="Categoría">
            
            <div class="p-4">
                <h5 class="text-xl font-semibold text-gray-800">Telefonos</h5>
                <p class="text-gray-600 text-sm mt-2">
                    Lo mejor en telefonos de alta gama a los mejores precios.
                </p>
                
                <a href="#" class="mt-4 inline-block bg-violet-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-violet-900 transition">
                    Ver más
                </a>
            </div>
        </div>
        <div class="max-w-xs rounded-2xl overflow-hidden shadow-lg bg-white">
            <img class="w-full h-40 object-cover" src="https://res.cloudinary.com/cook-becker/image/fetch/q_auto:best,f_auto,w_1920,g_center/https://candb.com/site/candb/images/article/take-your-heart_persona-5_article.jpg" alt="Categoría">
            
            <div class="p-4">
                <h5 class="text-xl font-semibold text-gray-800">Linea Blanca</h5>
                <p class="text-gray-600 text-sm mt-2">
                    Explora lo último en dispositivos, gadgets y avances tecnológicos.
                </p>
                
                <a href="#" class="mt-4 inline-block bg-violet-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-violet-900 transition">
                    Ver más
                </a>
            </div>
        </div>
        <div class="max-w-xs rounded-2xl overflow-hidden shadow-lg bg-white">
            <img class="w-full h-40 object-cover" src="https://res.cloudinary.com/cook-becker/image/fetch/q_auto:best,f_auto,w_1920,g_center/https://candb.com/site/candb/images/article/take-your-heart_persona-5_article.jpg" alt="Categoría">
            
            <div class="p-4">
                <h5 class="text-xl font-semibold text-gray-800">Servicios</h5>
                <p class="text-gray-600 text-sm mt-2">
                    Ofrecemos servicios de reparacion de telefonos y dispositivos electronicos en general.
                </p>
                
                <a href="#" class="mt-4 inline-block bg-violet-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-violet-900 transition">
                    Ver más
                </a>
            </div>
        </div>
    </div>

    <!-- Seccion de articulos-->
    
</body>
</html>
@endsection


