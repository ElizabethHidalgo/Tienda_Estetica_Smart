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
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">Tienda Centro Smart</div>
        <div class="search-container">
            <input class="form-control" type="search" placeholder="🔍Ingrese su búsqueda aquí" aria-label="Search">
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

</html>
