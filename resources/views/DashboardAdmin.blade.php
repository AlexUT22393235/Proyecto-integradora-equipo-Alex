@extends('PlantillaAdmin')

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
               

                <a href="/CrudAsesorDeAdmin" class="border-l-4 border-green-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Asesores</h3>
                        <img src="/asesor.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Asesores disponibles para consulta</p>
                    </div>
                </a>

                <a href="/CrudDireccionDeAdmin" class="border-l-4 border-yellow-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Dirección</h3>
                        <img src="/documento.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Información sobre los presidentes de divisiones</p>
                    </div>
                </a>

                <a href="/CrudPresidenteDeAdmin" class="border-l-4 border-pink-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Presidente</h3>
                        <img src="/presidente.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Información sobre los presidentes de diviones</p>
                    </div>
                </a>

                <a href="/crudAlumnosAdmin" class="border-l-4 border-red-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Alumnos</h3>
                        <img src="/alumno.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Información sobre los alumnos</p>
                    </div>
                </a>

                <a href="/permisos" class="border-l-4 border-purple-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Permisos</h3>
                        <img src="/rol.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Permisos en el sistema</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

</body>
</html>
@endsection