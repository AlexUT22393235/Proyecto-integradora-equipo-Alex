@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>

<body class="bg-blue-50">

    <div>
        <div class="container mx-auto mt-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                <a href="/DocumentosAlumnos" class="border-l-4 border-blue-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Proyectos</h3>
                        <img src="/proyecto.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Proyectos en el área de ingeniería</p>
                    </div>
                </a>

                <div class="border-l-4 border-green-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Asesores</h3>
                        <img src="/asesor.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Asesores disponibles para consulta</p>
                    </div>
                </div>

                <div class="border-l-4 border-yellow-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Documentos</h3>
                        <img src="/documento.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Documentos relevantes para la carrera</p>
                    </div>
                </div>

                <a href="/Alumnos" class="border-l-4 border-red-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Alumnos</h3>
                        <img src="/alumno.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Información sobre los alumnos</p>
                    </div>
                </a>

                <div class="border-l-4 border-purple-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Roles</h3>
                        <img src="/rol.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Roles y responsabilidades en el sistema</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
@endsection
