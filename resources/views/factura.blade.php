<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .invoice-container {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
        }

        h1, h2 {
            text-align: center;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .invoice-header div {
            width: 45%;
        }

        .invoice-items {
            width: 100%;
            border-collapse: collapse;
        }

        .invoice-items th, .invoice-items td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .invoice-items th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
            text-align: right;
            padding: 10px 0;
        }

        .empty-message {
            text-align: center;
            color: #888;
            font-size: 1.2em;
        }

        .back-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            text-align: center;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <h1>Factura</h1>
        <div class="invoice-header">
            <div>
                <h2>Tecno Centro Smart</h2>
                <p>Dirección: Calle Falsa 123</p>
                <p>Teléfono: (123) 456-7890</p>
            </div>
            <div style="text-align: right;">
                <p>Fecha: <span id="invoice-date"></span></p>
                <p>N° Factura: <span id="invoice-number"></span></p>
            </div>
        </div>
        <table class="invoice-items">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="invoice-body">
                <!-- Items de la factura -->
            </tbody>
        </table>
        <p class="total" id="invoice-total"></p>
        <p class="empty-message" id="empty-message" style="display: none;">No hay productos en el carrito.</p>
        <a href="javascript:window.history.back();" class="back-button">Volver a la tienda</a>
    </div>

    <script>
        function cargarFactura() {
            const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
            const invoiceBody = document.getElementById('invoice-body');
            const invoiceTotal = document.getElementById('invoice-total');
            const emptyMessage = document.getElementById('empty-message');
            let total = 0;

            if (carrito.length === 0) {
                emptyMessage.style.display = 'block';
                invoiceTotal.style.display = 'none';
            } else {
                emptyMessage.style.display = 'none';
                invoiceTotal.style.display = 'block';

                carrito.forEach(item => {
                    const itemTotal = item.precio * item.cantidad;
                    total += itemTotal;

                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${item.nombre}</td>
                        <td>${item.cantidad}</td>
                        <td>$${item.precio.toFixed(2)}</td>
                        <td>$${itemTotal.toFixed(2)}</td>
                    `;
                    invoiceBody.appendChild(row);
                });

                invoiceTotal.textContent = `Total: $${total.toFixed(2)}`;
            }

            // Información de la factura
            document.getElementById('invoice-date').textContent = new Date().toLocaleDateString();
            document.getElementById('invoice-number').textContent = Math.floor(Math.random() * 1000000);
        }

        window.onload = cargarFactura;
    </script>
</body>
</html>
