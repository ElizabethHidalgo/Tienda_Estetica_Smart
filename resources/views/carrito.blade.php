<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecno Centro Smart</title>
    <style>
        body {
            background: url('imagenes/Index.png') no-repeat center center fixed;
            background-size: cover;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            height: 100%;
        }

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
            background-color: rgba(36, 133, 173, 0.7);
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

        .container {
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
            color: #343a40;
        }

        .table {
            margin-bottom: 0;
            width: 100%;
        }

        .thead-dark th {
            background-color: #343a40;
            color: #ffffff;
        }

        #no-items-message {
            text-align: center;
            color: #6c757d;
            font-size: 1.2em;
        }

        .btn-crud {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: 0.5rem;
        }

        .btn-crud:hover {
            background-color: #0056b3;
        }

        .btn-crud.red {
            background-color: #dc3545;
        }

        .btn-crud.red:hover {
            background-color: #c82333;
        }

        .btn-crud.green {
            background-color: #28a745;
        }

        .btn-crud.green:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">Tecno Centro Smart</div>
        <div class="search-container">
            <input class="form-control me-2" type="search" placeholder="🔍 Ingrese su búsqueda aquí" aria-label="Search" id="search-input">
            <button class="btn-search" type="submit" onclick="buscarProducto()">Buscar</button>
            <div id="search-message" style="text-align: center; margin-top: 20px; color: white;"></div>
        </div>
        <ul class="nav-links">
            <li><a href="http://localhost/Tienda_Estetica_Smart/public/">Inicio</a></li>
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

    <div class="container">
        <h1>Carrito de Compras</h1>
        <div class="alert alert-success" id="success-message" style="display: none;"></div>
        <div id="carrito">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="carrito-items">
                    <!-- Productos agregados al carrito se mostrarán aquí -->
                </tbody>
            </table>
        </div>
        <p id="no-items-message" style="display: none;">No hay productos en el carrito.</p>
        <button class="btn-crud green" onclick="vaciarCarrito()">Vaciar Carrito</button>
        <button class="btn-crud" onclick="generarFactura()">Generar Factura</button>
    </div>

    <script>
    function generarFactura() {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    
    if (carrito.length > 0) {
        // Incluye el subdirectorio en la URL
        window.location.href = 'http://10.8.25.20/Tienda_Estetica_Smart/public/factura';
    } else {
        alert('El carrito está vacío. No se puede generar una factura.');
    }
}

</script>

    <script>
function mostrarCarrito() {
    const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
    const carritoItems = document.getElementById('carrito-items');
    carritoItems.innerHTML = '';

    if (carrito.length === 0) {
        document.getElementById('carrito').style.display = 'none';
        document.getElementById('no-items-message').style.display = 'block';
    } else {
        document.getElementById('carrito').style.display = 'block';
        document.getElementById('no-items-message').style.display = 'none';
        carrito.forEach((item, index) => {
            carritoItems.innerHTML += `
                <tr>
                    <td><img src="${item.imageUrl}" alt="${item.nombre}" style="width: 50px; height: 50px; object-fit: cover;"></td>
                    <td>${item.nombre}</td>
                    <td>$${item.precio.toFixed(2)}</td>
                    <td>
                        <button class="btn-crud red" onclick="eliminarProducto(${index})">Eliminar</button>
                    </td>
                </tr>
            `;
        });
    }
}

        function eliminarProducto(index) {
            const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            carrito.splice(index, 1);
            localStorage.setItem('carrito', JSON.stringify(carrito));
            mostrarCarrito();
        }

        function vaciarCarrito() {
            if (confirm("¿Está seguro de que desea vaciar el carrito?")) {
                localStorage.removeItem('carrito');
                mostrarCarrito();
            }
        }

        window.onload = mostrarCarrito;

        function buscarProducto() {
            const searchInput = document.getElementById('search-input').value.trim();
            if (searchInput) {
                window.location.href = `/buscar?query=${encodeURIComponent(searchInput)}`;
            } else {
                document.getElementById('search-message').textContent = "Por favor, ingrese un término de búsqueda.";
            }
        }
    </script>

</body>
</html>
