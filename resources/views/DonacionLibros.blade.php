<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donación de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <nav style="background-color: #325b87;">
        <div class="flex items-center justify-between p-6">
            <div class="flex items-center space-x-8">
                <a href="/">
                    <img src="images/logo.png" alt="Logo" class="w-auto mr-20 h-9 max-w-32">
                </a>

                <div class="italic font-thin space-x-9">
                    <a href="Control">
                        <button class="text-white">Proyectos</button>
                    </a>
                    <button class="text-white">Asesores</button>
                    <button class="text-white">Docentes</button>
                    <button class="text-white">Documentos</button>
                    <a href="Tabla">
                        <button class="text-white">Alumnos</button>
                    </a>
                    <button class="text-white">Roles</button>
                </div>
            </div>

            <div class="flex items-center">
                <input type="text" placeholder="Buscar..." class="p-2 mr-4 bg-white rounded-md">
            </div>
        </div>
    </nav>

    <div class='border py-7'>
        <h1 class='text-4xl py-5 px-10 border shadow-lg border-[#124A71] '>Donación de libro</h1>

        </div>


    <div class="flex min-h-screen">
        <div class="flex-grow p-8 bg-white">

            <div class="mb-4">
                <div class="relative mb-4">
                    <label for="title" class="block mb-2 text-sm font-bold text-gray-700">
                        Título del Libro
                    </label>
                    <div class="border-2 border-blue-900 rounded-lg">
                        <input id="title" type="text" placeholder="Titulo del libro"
                            class="w-full px-4 py-2 text-gray-700 bg-transparent rounded-lg focus:outline-none">
                    </div>
                </div>
                <label for="payment-doc" class="block mb-2 text-sm font-bold text-gray-700">
                    Documento de pago
                </label>
                <input id="payment-doc" type="text" placeholder="Documento de pago"
                    class="w-full px-4 py-2 text-gray-700 bg-transparent border-2 border-blue-900 rounded-lg focus:outline-none">

                <label for="isbn" class="block mb-2 text-sm font-bold text-gray-700">
                    ISBN
                </label>
                <input id="isbn" type="text" placeholder="0-0000-0000-0"
                    class="w-full px-4 py-2 text-gray-700 bg-transparent border-2 border-blue-900 rounded-lg focus:outline-none">

                <div class="flex items-center justify-between mt-4"> <!-- Margen superior para los botones -->
                    <button type="button"
                        class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                        Donación Compartida
                    </button>
                    <button type="button"
                        class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700 focus:outline-none focus:shadow-outline">
                        Listo
                    </button>
                </div>
            </div>
        </div>
        <div class="w-1/4"></div>
    </div>
</body>

</html>