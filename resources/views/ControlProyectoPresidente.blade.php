@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto - Presidente</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .header-nav a:hover {
            color: #d1d5db;
        }

        .project-info button:hover {
            background-color: #2563eb;
        }

        .vote-button:hover {
            background-color: #2563eb;
        }

        .comment-button:hover {
            background-color: #2563eb;
        }

        .card {
            max-width: 800px; /* Aumenta el ancho máximo de las cards */
        }

        .bold-text {
            font-weight: bold; /* Hice el texto de asesor académico, estatus del proyecto y comentarios más negrita */
        }

        .number {
            color: black; /* Hice los números de todas las cards de color negro */
        }

        .comment-input {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 8px;
            width: 100%; /* Ancho del 100% para ocupar todo el espacio disponible */
            min-height: 50px; /* Altura mínima para evitar que el área de texto se haga demasiado pequeña */
            resize: vertical; /* Permite redimensionar verticalmente el textarea */
        }

        .send-button {
            background-color: #2563eb;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px 12px;
            cursor: pointer;
        }

        .comment-container {
            display: flex;
            align-items: flex-start;
            margin-top: 10px;
        }

        .comment-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .comment-text {
            flex-grow: 1;
            background-color: #f0f2f5;
            padding: 10px;
            border-radius: 10px;
        }

        /* Estilos adicionales para mejorar el diseño */
        .left-card {
            width: 1000px; /* Ajusta el ancho de la card de la izquierda */
            background-color: #ffffff; /* Cambia el color de fondo de la card a blanco */
            padding: 20px; /* Añade un poco de espacio interno */
            border-radius: 10px; /* Agrega bordes redondeados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Agrega sombra */
        }

        .white-card {
            background-color: #ffffff; /* Cambia el color de fondo de la tarjeta a blanco */
        }

        /* Ajusta el margen izquierdo de las tarjetas de asesor académico, estatus del proyecto y comentarios */
        .other-cards {
            margin-left: 30px; /* Centra las tarjetas */
            margin-right: auto; /* Centra las tarjetas */
            display: flex; /* Alinea las tarjetas horizontalmente */
            justify-content: center; /* Centra las tarjetas horizontalmente */
            gap: 20px; /* Añade espacio entre las tarjetas */
        }

        /* Quita el color azul de la tarjeta de estatus del proyecto */
        .status-card {
            background-color: #ffffff; /* Cambia el color de fondo de la tarjeta a blanco */
        }

        /* Ajusta la anchura y el margen izquierdo de las tarjetas de asesor académico, estatus del proyecto y comentarios */
        .wide-card {
            width: 530px; /* Ajusta la anchura */
            padding: 20px; /* Aumenta el espacio interno */
        }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-blue-50">
    <div class="p-8">
        <div class="font-bold  border-b border-zinc-400 px-5 py-3 text-2xl mx-5">
            Detalles de proyecto
        </div>
        <div class="flex-grow mt-5">
            <div class="flex justify-between items-start p-6 ">
                <!-- Nueva card agregada en el espacio en blanco del lado izquierdo -->
                <div class="bg-white p-4 text-center rounded-2xl shadow-md card left-card"> <!-- Aplicamos el estilo left-card -->
                    <h2 class="text-blue-800 text-lg bold-text">Detalles del Proyecto:</h2>

                    <div class="mb-4">
                        <label for="company-name" class="block text-subtitle text-sm font-bold mb-2">Empresa</label>
                        <input type="text" id="company-name" value="Nombre de la empresa" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>

                    <div class="mb-4">
                        <label for="advisor-name" class="block text-subtitle text-sm font-bold mb-2">Asesor</label>
                        <input type="text" id="advisor-name" value="Rafael Villegas" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>

                    <div class="mb-4">
                        <label for="project-title" class="block text-subtitle text-sm font-bold mb-2">Título del Proyecto</label>
                        <input type="text" id="project-title" value="Título del proyecto" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>

                    <div class="mb-4">
                        <label for="career" class="block text-subtitle text-sm font-bold mb-2">Carrera</label>
                        <input type="text" id="career" value="Nombre de la carrera" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>

                    <div class="flex mb-4 mr-4">
                        <div class="flex-grow mr-4">
                            <label for="start-date" class="block text-subtitle text-sm font-bold mb-2">Inicio</label>
                            <input type="date" id="start-date" value="2024-01-01" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                        </div>
                        <div class="flex-grow">
                            <label for="end-date" class="block mb-2 text-sm font-bold text-subtitle">Final</label>
                            <input type="date" id="end-date" value="2024-12-31" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="objectives" class="block text-subtitle text-sm font-bold mb-2">1. Objetivo General del Proyecto</label>
                        <textarea id="objectives" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">Este es el objetivo general del proyecto.</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="problem-statement" class="block text-subtitle text-sm font-bold mb-2">2. Planteamiento del Problema</label>
                        <textarea id="problem-statement" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">Este es el planteamiento del problema.</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="justification" class="block text-subtitle text-sm font-bold mb-2">3. Justificación</label>
                        <textarea id="justification" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">Esta es la justificación del proyecto.</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="activities" class="block text-subtitle text-sm font-bold mb-2">4. Actividades a realizar</label>
                        <textarea id="activities" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">Estas son las actividades a realizar en el proyecto.</textarea>
                    </div>
                </div>
                <!-- Fin de la nueva card -->
                <div class="flex flex-col w-full max-w-lg gap-4 other-cards">
                    <div class="bg-white p-4 text-center rounded-2xl shadow-md card white-card wide-card">
                        <h2 class="text-blue-800 text-lg bold-text">Asesor Académico</h2>
                        <p class="bold-text">Rafael Villegas</p>
                        <p class="bold-text">rvillegas@utcancun.edu.mx</p>
                    </div>
                    <div class="bg-white p-4 text-center rounded-2xl shadow-md card status-card wide-card">
                        <h2 class="text-blue-800 text-lg bold-text">Estatus del proyecto</h2>
                        <p>Comentarios: <span class="number">2</span></p>
                        <p>Votos: <span class="number">3</span></p>
                        <button class="bg-blue-800 text-white px-4 py-2 rounded-xl shadow-lg flex items-center justify-center mx-auto vote-button">
                            <span class="text-lg mr-2">❤️</span> Votar
                        </button>
                    </div>
                    <div class="bg-white p-4 text-center rounded-2xl shadow-md card white-card wide-card">
                        <h2 class="text-blue-800 text-lg bold-text">Comentarios:</h2>
                        <div class="comment-container">
                            <div>
                                <p class="flex items-center bold-text"> <!-- Ajustamos el estilo del nombre -->
                                    <span class="comment-name">Edwin Turcatti</span> <!-- Añadimos una clase para el nombre -->
                  

                                </p>
                                <p class="comment-text">Este es un comentario de ejemplo.</p>
                            </div>
                        </div>
                        <div class="flex items-center mt-4">
                            <textarea class="comment-input" placeholder="Añade un comentario..." rows="2"></textarea>
                            <button class="send-button ml-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection