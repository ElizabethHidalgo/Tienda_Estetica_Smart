<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 30px;
            color: #343a40;
        }
        .table {
            margin-bottom: 0;
        }
        .thead-dark th {
            color: #ffffff;
        }
        .form-group label {
            font-weight: bold;
            color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-back {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-back:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }
        #success-message {
            margin-bottom: 20px;
            color: #155724;
        }
        #no-items-message {
            text-align: center;
            color: #6c757d;
            font-size: 1.2em;
        }
        td {
            color: #495057;
        }
        .form-control {
            color: #495057;
        }
        .mt-3 {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Carrito</h1>

        <div class="alert alert-success" id="success-message" style="display: none;">
            <!-- Mensaje de éxito -->
        </div>

        <!-- Mensaje de carrito vacío -->
        <div id="no-items-message" style="display: none;">
            <p>Tu Carrito de tecno está vacío</p>
            <button onclick="location.href='/login'" class="btn btn-secondary mt-3">Inicia sesión en tu cuenta</button>
            <button onclick="location.href='/register'" class="btn btn-secondary mt-3">Regístrate ahora</button>
        </div>

        <!-- Contenido del carrito -->
        <div id="carrito" style="display: none;">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Producto 1</td>
                        <td>1</td>
                        <td>$10.00</td>
                        <td>
                            <form action="/carrito/eliminar" method="POST" style="display: inline;">
                                <input type="hidden" name="item_id" value="1">
                                <button type="submit" class="btn btn-danger">Cancelar</button>
                            </form>
                            <form action="/carrito/pagar" method="POST" style="display: inline;">
                                <input type="hidden" name="item_id" value="1">
                                <button type="submit" class="btn btn-success">Pagar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var isAuthenticated = false; // Simula el estado de autenticación del usuario
            var hasItemsInCart = false; // Simula si hay productos en el carrito

            if (isAuthenticated) {
                if (hasItemsInCart) {
                    document.getElementById('carrito').style.display = 'block';
                    document.getElementById('no-items-message').style.display = 'none';
                } else {
                    document.getElementById('carrito').style.display = 'none';
                    document.getElementById('no-items-message').style.display = 'block';
                }
            } else {
                document.getElementById('carrito').style.display = 'none';
                document.getElementById('no-items-message').style.display = 'block';
            }

            var successMessage = ""; // Deja vacío si no hay mensaje de éxito
            if (successMessage) {
                var messageElement = document.getElementById('success-message');
                messageElement.textContent = successMessage;
                messageElement.style.display = 'block';
            }
        });
    </script>
</body>
</html>
