<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Más Información</title>
    <meta name="description" content="Más información sobre nuestra empresa, testimonios, y opciones de envío">

    <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        body {
            background-color: #f7fafc;
            background: url('imagenes/Index.png') no-repeat center center fixed;
            background-size: cover;
        }
    </style>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

<body class="font-family-karla">

    <!-- Header -->
    <header class="w-full py-6 bg-blue-800 text-white text-center">
        <h1 class="text-4xl font-bold">Más Información</h1>
        <p class="text-lg mt-2">Conoce más sobre nuestra empresa, nuestros testimonios y opciones de envío</p>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Información de la Empresa -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-bold mb-4">Información de la Empresa</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Historia y Misión</h3>
                    <p class="text-gray-700 mb-4">Somos una empresa dedicada a la venta de accesorios tecnológicos desde 2005. Nuestra misión es ofrecer productos de alta calidad que mejoren la vida de nuestros clientes, brindando un servicio excepcional y soporte técnico especializado.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Valores y Compromisos</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Calidad: Nos comprometemos a ofrecer productos de la más alta calidad.</li>
                        <li>Innovación: Estamos siempre a la vanguardia de la tecnología.</li>
                        <li>Servicio al Cliente: Priorizamos la satisfacción del cliente en todo momento.</li>
                        <li>Sostenibilidad: Trabajamos para reducir nuestro impacto ambiental.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Testimonios -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-bold mb-4">Testimonios de Clientes</h2>
            <div class="space-y-6">
                <blockquote class="border-l-4 border-blue-500 pl-4">
                    <p class="text-lg italic text-gray-700">"He comprado varios accesorios y siempre he quedado satisfecho con la calidad y el servicio. ¡Altamente recomendados!"</p>
                    <footer class="text-sm font-semibold text-gray-600">— Juan Pérez</footer>
                </blockquote>
                <blockquote class="border-l-4 border-blue-500 pl-4">
                    <p class="text-lg italic text-gray-700">"Excelente atención al cliente y productos de primera. No compraría en ningún otro lugar."</p>
                    <footer class="text-sm font-semibold text-gray-600">— María López</footer>
                </blockquote>
                <!-- Puedes agregar más testimonios aquí -->
            </div>
        </section>

        <!-- Formas de Envío del Producto -->
        <section class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Formas de Envío del Producto</h2>
            <p class="text-gray-700 mb-4">Ofrecemos diversas opciones de envío para adaptarnos a las necesidades de nuestros clientes:</p>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Envío Estándar: Entrega en 5-7 días hábiles.</li>
                <li>Envío Exprés: Entrega en 2-3 días hábiles.</li>
                <li>Envío en el Mismo Día: Disponible en áreas metropolitanas seleccionadas.</li>
            </ul>
            <p class="mt-4 text-gray-700">Todos nuestros envíos están asegurados y cuentan con seguimiento en tiempo real.</p>
        </section>
    </main>

    <!-- Footer -->
    <footer class="w-full py-6 bg-blue-800 text-white text-center">
        <p>&copy; 2024 Tecno Centro Smart</p>
    </footer>

</body>

</html>
