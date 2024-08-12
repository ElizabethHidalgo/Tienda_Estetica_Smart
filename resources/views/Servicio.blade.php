<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicio</title>
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

 
    </style>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>


<body class="bg-white font-family-karla">

    <!-- Navbar -->
<nav class="bg-gray-800 bg-opacity-10 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Branding -->
        <div class="text-white font-bold text-5xl" style="color: #ff5722;">
            Tecno Centro Smart
        </div>

        <!-- Toggle button for mobile -->
        <div class="block lg:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Search bar -->
        <div class="flex-1 hidden lg:flex justify-center">
            <div class="flex items-center w-full max-w-xs">
                <input class="form-control flex-grow pl-10 pr-4 py-2 bg-white text-gray-700 rounded-lg focus:outline-none" type="search" placeholder="🔍 Ingrese su búsqueda" aria-label="Search">

                <button class="ml-2 px-4 py-2 text-gray-700 bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none" type="submit">Buscar</button>
            </div>
        </div>

        <!-- Navigation Links -->
        <ul id="nav-links" class="hidden lg:flex space-x-6 text-white">
            <li><a href="{{ url('/') }}" class="hover:text-blue-300 text-2xl">Inicio</a></li>
            <li><a href="#" class="hover:text-blue-300 text-2xl">Servicio</a></li>
            <li><a href="{{ route('productos.index') }}" class="hover:text-blue-300 text-2xl">Productos</a></li>
            <li><a href="{{ route('contacto') }}" class="hover:text-blue-300 text-2xl">Contactos</a></li>
            <li class="cart-icon">
                <a href="ca" class="flex items-center hover:text-blue-300 text-2xl"><i class="fas fa-shopping-cart mr-2"></i>Carrito</a>
            </li>
            <li class="user-icon">
                <a href="{{ route('login') }}" class="hover:text-blue-300 text-2xl"><i class="fas fa-user mr-2"></i>Perfil</a>
            </li>
        </ul>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="lg:hidden hidden">
        <ul class="flex flex-col items-center space-y-4 text-white mt-4">
            <li><a href="{{ url('/') }}" class="hover:text-blue-300">Inicio</a></li>
            <li><a href="#" class="hover:text-blue-300">Servicio</a></li>
            <li><a href="{{ route('productos.index') }}" class="hover:text-blue-300">Productos</a></li>
            <li><a href="#" class="hover:text-blue-300">Contactos</a></li>
            <li class="cart-icon">
                <a href="#" class="flex items-center hover:text-blue-300"><i class="fas fa-shopping-cart mr-2"></i>Carrito</a>
            </li>
            <li class="user-icon">
                <a href="{{ route('login') }}" class="hover:text-blue-300"><i class="fas fa-user mr-2"></i>Perfil</a>
            </li>
        </ul>
        <!-- Search bar for mobile -->
        <div class="flex lg:hidden flex-1 justify-center mt-4">
            <div class="flex items-center w-full max-w-xs">
                <input class="form-control flex-grow pl-10 pr-4 py-2 bg-white text-gray-700 rounded-lg focus:outline-none" type="search" placeholder="🔍 Ingrese su búsqueda" aria-label="Search">

                <button class="ml-2 px-4 py-2 text-gray-700 bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none" type="submit">Buscar</button>
            </div>
        </div>
    </div>
</nav>

    
    <script>
        // Script para manejar el toggle del menú en móvil
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>


    <!-- Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#" style="color: white;">
                SERVICIOS
            </a>
            <p class="text-lg text-gray-600" style="color: white;">
                Tecno Centro Smart
            </p>
        </div>
    </header>
   

   
</body>

</html>