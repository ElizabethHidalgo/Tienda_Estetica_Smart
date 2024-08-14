<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Tienda Estetica Smart</title>
    <style>
        body {
            background: url('imagenes/Index.png') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            height: 100vh;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.5);
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
            height: 2.5rem;
            width: 300px;
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

        .main-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 3rem;
            height: calc(100vh - 4rem);
        }

        .text-content {
            max-width: 50%;
        }

        .text-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .text-content p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        .text-content a {
            border: 2px solid #ff5722;
            color: #ff5722;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .text-content a:hover {
            background-color: #ff5722;
            color: #ffffff;
        }

        .image-container {
            max-width: 45%;
        }

        .image-container img {
            width: 100%;
            height: auto;
        }


    <title>Tienda Estetica Smart</title>
    <style>
    /* General body style */
    body {
        background: url('imagenes/Index.png') no-repeat center center fixed;
        background-size: cover;
        /* Ajustar la imagen al tamaño de la pantalla */
        color: #ffffff;
        /* Texto blanco */
        font-family: 'Arial', sans-serif;
        /* Familia de fuente */
        margin: 0;
        /* Eliminar márgenes por defecto */
        height: 100vh;
        /* Altura completa de la vista */
    }

    /* Navbar style */
    .navbar {
        background: rgba(0, 0, 0, 0);
        /* Fondo transparente */
        padding: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-brand {
        color: #ff5722;
        /* Texto naranja */
        font-size: 2.5rem;
        font-weight: bold;
    }

    .nav-links {
        display: flex;
        align-items: center;
        list-style: none;
        /* Quitar viñetas */
        margin: 0;
        /* Eliminar márgenes */
        padding: 0;
        /* Eliminar padding */
    }

    .nav-links li {
        margin: 0 1rem;
    }

    .nav-links a {
        color: #ffffff;
        /* Texto blanco */
        text-decoration: none;
        /* Quitar subrayado */
        font-size: 1rem;
    }

    .nav-links a:hover {
        text-decoration: underline;
        /* Subrayado al pasar el ratón */
    }

    .search-container {
        display: flex;
        align-items: center;
    }

    .form-control {
        background-color: transparent;
        /* Fondo transparente */
        border: 1px solid rgba(255, 255, 255, 0.5);
        /* Borde ovalado y semi-transparente */
        border-radius: 20px;
        /* Esquinas redondeadas */
        padding: 0.5rem;
        margin-right: 0.5rem;
        color: #ffffff;
        /* Texto blanco */
        box-shadow: none;
        /* Eliminar sombra */
        height: 2.5rem;
        /* Altura fija */
        width: 300px;
        /* Ancho fijo */
    }


    .form-control::placeholder {
        color: #9e9e9e;
        /* Color del texto del placeholder */
    }

    .btn-search {
        background-color: rgba(36, 133, 173);
        /* Fondo del botón semitransparente */
        color: #ffffff;
        /* Texto del botón */
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        /* Esquinas redondeadas */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        /* Sombra suave */
        cursor: pointer;
        /* Cursor de puntero */
        transition: background-color 0.3s, box-shadow 0.3s;
        /* Transición suave */
    }

    .btn-search:hover {
        background-color: rgba(21, 101, 192, 0.7);
        /* Fondo del botón al pasar el ratón */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        /* Sombra más fuerte al pasar el ratón */
    }

    .cart-icon {
        position: relative;
        display: flex;
        align-items: center;
    }

    .cart-icon span {
        background-color: #e53935;
        /* Fondo del contador */
        color: #ffffff;
        /* Texto blanco del contador */
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
        /* Escala al pasar el ratón */
        opacity: 0.9;
        /* Opacidad al pasar el ratón */
    }

    .main-content {
        display: flex;
        flex-direction: column;
        padding: 3rem;
        height: 150vh;
        /* Ajusta la altura al 100% de la altura del viewport */
        /* Puedes eliminar justify-content y align-items para no centrar los elementos hijos */
    }


    .main-content h1 {
        font-size: 3rem;
        margin-bottom: -0.2rem;
        text-rendering: optimizeLegibility;
        /* Optimización del renderizado del texto */
        -webkit-font-smoothing: antialiased;
        /* Suavizado de bordes en navegadores WebKit */
        -moz-osx-font-smoothing: grayscale;
        /* Suavizado de bordes en macOS */
    }

    .main-content h1 span {
        color: #ff5722;
        /* Texto naranja */
    }

    .main-content p {
        font-size: 1rem;
        margin-bottom: 2rem;
        max-width: 600px;
        text-rendering: optimizeLegibility;
        /* Optimización del renderizado del texto */
        -webkit-font-smoothing: antialiased;
        /* Suavizado de bordes en navegadores WebKit */
        -moz-osx-font-smoothing: grayscale;
        /* Suavizado de bordes en macOS */
    }

    .main-content .btn {
        background-color: transparent;
        /* Fondo transparente */
        color: #ffffff;
        /* Texto del botón en color blanco */
        border: 2px solid tomato;
        /* Borde de color tomate */
        padding: 0.75rem 1.5rem;
        border-radius: 20px;
        /* Esquinas medio ovaladas */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        /* Sombra suave */
        cursor: pointer;
        /* Cursor de puntero */
        margin: 0.5rem;
        transition: background-color 0.3s, box-shadow 0.3s;
        /* Transición suave */
    }

    .main-content .row {
        display: flex;
        /* Mostrar elementos en fila */
        gap: 11rem;
        /* Espacio entre elementos en la fila */
    }

    body {
        background-color: #333;
        /* Fondo oscuro para resaltar el ícono blanco */
        color: white;
        /* Texto blanco */
    }

    a {
        color: white;
        /* Color del enlace */
        text-decoration: none;
        /* Sin subrayado */
        font-size: 24px;
        /* Tamaño del texto */
    }

    a:hover {
        color: #ccc;
        /* Color del enlace al pasar el cursor */
    }

    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">Tienda Estetica Smart</div>
        <div class="search-container">

            <input class="form-control" type="search" placeholder="🔍Ingrese su búsqueda aquí" aria-label="Search">

            <input class="form-control me-2" type="search" placeholder="🔍Ingrese su búsqueda aquí" aria-label="Search">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>

            <button class="btn-search" type="submit">Buscar</button>
        </div>
        <ul class="nav-links">
            <li><a href="#">Inicio</a></li>


            <li><a href="#">Servicio</a></li>

            <li><a href="{{ route('productos.index') }}">Productos</a></li>
            <li><a href="#">Contactos</a></li>
            <li class="cart-icon">
                <a href="ca"><i class="fas fa-shopping-cart" style="margin-right: 5px;"></i>Carrito</a>
            </li>
            <li class="user-icon">

                <a href="{{ route('login') }}"><i class="fas fa-user" style="color: white; font-size: 24px;"></i></a>

            <a href="{{ route('login') }}"><i class="fas fa-user" style="color: white; font-size: 24px;"></i></a>

            </li>
        </ul>
    </nav>

    <div class="main-content">

        <div class="text-content">
            <h1>Encuentra tu <span style="color: #ff5722;">accesorio</span> perfecto para computadoras aquí</h1>
            <p>Explora nuestra amplia selección de accesorios para computadoras, desde potentes mouse y teclados mecánicos hasta componentes de vanguardia. Ofrecemos productos de alta calidad que mejorarán tu experiencia informática.</p>
            <a href="{{ route('productos.index') }}">Explorar Accesorios</a>
        </div>
        <div class="image-container">
            <img src="imagenes/Ejem_1.png" alt="Accesorios">
        </div>
    </div>
</body>


        <div class="row">
            <div class="column">
                <h1>Encuentra tu </h1>
                <h1><span>accesorio</span></h1>
                <h1>perfecto para </h1>
                <h1>computadoras</h1>
                <h1>aquí</h1>
                <p>Explora nuestra amplia selección de accesorios para computadoras, desde potentes mouse y teclados
                    mecánicos hasta componentes de vanguardia. Ofrecemos productos de alta calidad que mejorarán tu
                    experiencia informática.</p>
                <div>              
                    <a href="{{ url('/masinfo') }}" class="btn btn">Más Información</a>
                    <a href="{{ route('productos.index') }}" class="btn">Explorar Accesorios</a>
                </div>
            </div>

            <div class="column" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                <img src="imagenes/Ejem_1.png"
                    style="max-width: 75%; max-height: 75%; vertical-align: middle;">
            </div>

        </div>
    </div>
</body>

</html>