@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>

    <div>
       

        <div class="container mx-auto mt-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                <a href="/DocumentosAlumnos" class="bg-gray-200 p-20 rounded-md shadow-md flex flex-col justify-between">
                    <div>
                        <h3 class="text-blue-800 text-lg font-semibold mb-4">Proyectos</h3>
                        <p class="text-gray-600 text-center">Proyectos en el área de ingeniería</p>
                    </div>
                </a>

                <div class="bg-gray-200 p-20 rounded-md shadow-md flex flex-col justify-between">
                    <div>
                        <h3 class="text-blue-800 text-lg font-semibold mb-4">Asesores</h3>
                        <p class="text-gray-600 text-center">Asesores disponibles para consulta</p>
                    </div>
                </div>

                <div class="bg-gray-200 p-20 rounded-md shadow-md flex flex-col justify-between">
                    <div>
                        <h3 class="text-blue-800 text-lg font-semibold mb-4">Docentes</h3>
                        <p class="text-gray-600 text-center">Docentes de la facultad</p>
                    </div>
                </div>

                <div class="bg-gray-200 p-20 rounded-md shadow-md flex flex-col justify-between">
                    <div>
                        <h3 class="text-blue-800 text-lg font-semibold mb-4">Documentos</h3>
                        <p class="text-gray-600 text-center">Documentos relevantes para la carrera</p>
                    </div>
                </div>

                <a href="/Alumnos" class="bg-gray-200 p-20 rounded-md shadow-md flex flex-col justify-between">
                    <div>
                        <h3 class="text-blue-800 text-lg font-semibold mb-4">Alumnos</h3>
                        <p class="text-gray-600 text-center">Información sobre los alumnos</p>
                    </div>
                </a>

                <div class="bg-gray-200 p-20 rounded-md shadow-md flex flex-col justify-between">
                    <div>
                        <h3 class="text-blue-800 text-lg font-semibold mb-4">Roles</h3>
                        <p class="text-gray-600 text-center">Roles y responsabilidades en el sistema</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
@endsection