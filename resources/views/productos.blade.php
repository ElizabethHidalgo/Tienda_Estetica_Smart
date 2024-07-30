<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <meta name="description" content="Tecno Centro Smart">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        body {
            background: url('imagenes/Index.png') no-repeat center center fixed;
            background-size: cover;
            
            font-family: 'Arial', sans-serif;
            margin: 0;
            height: 100vh;
        }

        /* Navbar style */
        .navbar {
            background: rgba(0, 0, 0, 0);
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            color: #ff5722;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            margin: 0 1rem;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1rem;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }

        .search-container {
            display: flex;
            align-items: center;
        }

        .form-control {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            padding: 0.5rem;
            margin-right: 0.5rem;
            color: #ffffff;
            box-shadow: none;
            height: 2.5rem;
            width: 300px;
        }

        .form-control::placeholder {
            color: #9e9e9e;
        }

        .btn-search {
            background-color: rgba(36, 133, 173);
            color: #ffffff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .btn-search:hover {
            background-color: rgba(21, 101, 192, 0.7);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .cart-icon {
            position: relative;
            display: flex;
            align-items: center;
        }

        .cart-icon span {
            background-color: #e53935;
            color: #ffffff;
            border-radius: 50%;
            padding: 0.2rem 0.5rem;
            position: absolute;
            top: -10px;
            right: -10px;
            font-size: 0.8rem;
        }

        .user-icon img {
            width: 24px;
            height: 24px;
        }

        .nav-links li a,
        .btn-search {
            transition: transform 0.2s, opacity 0.2s;
        }

        .nav-links li a:hover,
        .btn-search:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }
    </style>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

<body class="bg-white font-family-karla">

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">Tienda Estetica Smart</div>
        <div class="search-container">
            <input class="form-control" type="search" placeholder="🔍 Ingrese su búsqueda aquí" aria-label="Search">
            <button class="btn-search" type="submit">Buscar</button>
        </div>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="#">Servicio</a></li>
            <li><a href="{{ route('productos.index') }}">Productos</a></li>
            <li><a href="#">Contactos</a></li>
            <li class="cart-icon">
                <a href="ca"><i class="fas fa-shopping-cart" style="margin-right: 5px;"></i>Carrito</a>
            </li>
            <li class="user-icon">
                <a href="{{ route('login') }}"><i class="fas fa-user" style="color: white; font-size: 24px;"></i></a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#" style="color: white;">
                PRODUCTOS
            </a>
            <p class="text-lg text-gray-600" style="color: white;">
                Tecno Centro Smart
            </p>
        </div>
    </header>

    <!-- Topic Nav
    <nav class="w-full py-4 border-t border-b bg-gray-100">
        <div class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">xd</a>
            </div>
        </div>
    </nav> -->

    <div class="container mx-auto py-6">

        <!-- Seccion de Productos -->
        <section class="w-full flex flex-col items-center px-3">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($productos as $producto)
                <article class="flex flex-col shadow my-4">
                    <!-- productos -->
                    <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="hover:opacity-75">
                        <img src="{{ asset('http://127.0.0.1:8000/storage/' . $producto->image_url) }}">
                    </a>
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$producto->categoria->nombre}}</a>
                        <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$producto->nombre}}</a>
                        <p href="#" class="text-sm pb-3">
                            <a href="#" class="font-semibold hover:text-gray-800">Informacion:</a> {{$producto->descripcion}}
                        </p>
                        <a href="#" class="pb-6">PRECIO: $ {{$producto->precio}}</a>
                        <a href="#" class="uppercase text-gray-800 hover:text-black">Más Información <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Paginacion -->
            <div class="flex items-center py-8">
                <a href="#" class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next <i class="fas fa-arrow-right ml-2"></i></a>
            </div>
        </section>
    </div>


    <footer class="w-full border-t bg-white pb-12">
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="#" class="uppercase px-3">About Us</a>
                <a href="#" class="uppercase px-3">Privacy Policy</a>
                <a href="#" class="uppercase px-3">Terms & Conditions</a>
                <a href="#" class="uppercase px-3">Contact Us</a>
            </div>
            <div class="uppercase pb-6">&copy; Tecno Centro Smart</div>
        </div>
    </footer>
    </body>
</html>
       
