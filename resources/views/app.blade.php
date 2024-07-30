<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Tienda Estetica Smart</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style_home.css') }}">
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
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="navbar-brand">Tecno Centro Smart</div>
        <div class="search-container">
            <input class="form-control me-2" type="search" placeholder="🔍Ingrese su búsqueda aquí"
                aria-label="Search">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <button class="btn-search" type="submit">Buscar</button>
        </div>
        <ul class="nav-links">
            <li><a href="#">Inicio</a></li>
            <li><a href="{{ route('productos.index') }}">Productos</a></li>
            <li><a href="{{ route('contacto') }}">Contactos</a></li>
            <li class="cart-icon">
                <a href="ca"><i class="fas fa-shopping-cart" style="margin-right: 5px;"></i>Carrito</a>
            </li>
            <li class="user-icon">
                <a href="{{ route('login') }}"><i class="fas fa-user" style="color: white; font-size: 24px;"></i></a>
            </li>
        </ul>
    </nav>

    <div class="main-content">
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
                <img src="imagenes/Ejem_1.png" style="max-width: 75%; max-height: 75%; vertical-align: middle;">
            </div>

        </div>
    </div>
</body>


</html>

</html>

