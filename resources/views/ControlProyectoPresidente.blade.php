@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo 7</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .header-nav a:hover {
            color: #d1d5db;
        }

        .project-info button:hover {
            background-color: #2563eb;
        }

        .vote-button:hover {
            background-color: #dc2626;
        }

        .comment-button:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

<div class="flex-grow">
    <div class="border-t-4  text-center p-5">
        <h1 class="text-2xl">Información del proyecto</h1>
    </div>
    <div class="flex justify-evenly items-start p-6">
        <div class="w-full max-w-lg">
            <div class="flex flex-col items-center mb-6">
                <img src="/project.png" alt="Project" class="w-full max-w-md mb-4">
                <button class="bg-blue-800 text-white px-6 py-2 rounded shadow hover:bg-blue-700 transition duration-300 project-info">
                    Visualizar Proyecto
                </button>
            </div>
        </div>
        <div class="flex flex-col w-full max-w-lg gap-4">
            <div class="bg-gray-200 p-4 text-center rounded shadow">
                <h2 class="text-blue-800 text-lg">Asesor Académico</h2>
                <p>Rafael Villegas</p>
                <p class="text-red-600">rvillegas@utcancun.edu.mx</p>
            </div>
            <div class="bg-gray-200 p-4 text-center rounded shadow">
                <h2 class="text-blue-800 text-lg">Estatus del proyecto</h2>
                <p>Comentarios: <span class="text-red-600">2</span></p>
                <p>Votos: <span class="text-green-600">3</span></p>
                <button class="bg-red-500 text-white px-4 py-2 rounded-full shadow-lg flex items-center justify-center mx-auto vote-button">
                    <span class="text-lg mr-2">❤️</span> Votar
                </button>
            </div>
            <div class="bg-gray-200 p-4 w-full text-center rounded shadow">
                <h2 class="text-blue-800 text-lg">Comentarios:</h2>
                <p>El documento presentado no tiene ningún aspecto que se tenga que corroborar ya que abarco todos los
                    requerimientos que se tienen que cumplir y tiene <span
                        class="text-green-600">3</span> votos a favor y eso da autorización al siguiente paso.</p>
                <button class="mt-4 bg-blue-800 text-white px-5 py-2 rounded shadow comment-button">Comentar</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection