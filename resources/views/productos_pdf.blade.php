<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Productos</title>
    <style>
        /* Estilos para el PDF */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        img {
            max-width: 100px; /* Ajusta el tamaño de la imagen */
            height: auto;
        }
        .logo {
            max-width: 100px; /* Ajusta el ancho máximo de la imagen */
            height: auto;     /* Mantiene la proporción de la imagen */
        }
        .header-table {
            width: 100%;
            margin-bottom: 20px;
            border: none; /* Elimina el borde de la tabla del encabezado */
        }
        .header-table td {
            border: none; /* Elimina los bordes de las celdas del encabezado */
        }
        .header-title {
            font-size: 30px; /* Ajusta el tamaño de la fuente del título */
            margin: 0;
            text-align: center; /* Centra el texto horizontalmente */
        }
        .header-cell {
            vertical-align: middle; /* Alinea verticalmente al centro */
        }
    </style>
</head>
<body>
<table class="header-table">
        <tr>
            <td class="header-cell" style="width: 100px;">
                <img src="{{ public_path('imagenes/tecno.png') }}" alt="Logo" class="logo">
            </td>
            <td class="header-cell">
                <h1 class="header-title">Reporte de Productos</h1>
            </td>
        </tr>
    </table>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Precio</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->categoria->nombre ?? 'N/A' }}</td>
                    <td>${{ number_format($producto->precio, 2) }}</td>
                    <td>
                        @if($producto->image_url)
                            <img src="{{ public_path('storage/' . $producto->image_url) }}" alt="Imagen del producto">
                        @else
                            No disponible
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
