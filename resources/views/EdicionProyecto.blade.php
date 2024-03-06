@extends('plantilla')

@section('content')
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Page</title>
</head>

<body class="form-page">
<div>
    
    <div class="container mx-auto p-8">
        <form class="bg-gray-100 shadow-md rounded px-8 pt-6 pb-8 mb-4 project-details">
            <h1 class="block text-4xl font-bold mb-2 uppercase text-blue-900">EDICIÓN DEL ANTE-PROYECTO</h1>
            <br>
            <br>

            <div class="mb-4">
                <label for="student-id" class="block text-subtitle text-sm font-bold mb-2">
                    Ingresa la Matricula del Estudiante Colaborador
                </label>
                <div class="flex">
                    <input type="text" id="student-id" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-1/2 mr-2" />

                    <button type="button" class="save-button2">
                        BUSCAR
                    </button>
                </div>
                <br>
                <br>
                <br>

                <h1 class="block text-2xl font-bold mb-2 text-center text-blue-900">Detalles Del Proyecto:</h1>
            </div>

            <label for="company-name" class="block text-subtitle text-sm font-bold mb-2">Empresa</label>
            <input type="text" id="company-name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />

            <label for="advisor-name" class="block text-subtitle text-sm font-bold mb-2">Asesor</label>
            <input type="text" id="advisor-name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" />

            <label for="project-title" class="block text-subtitle text-sm font-bold mb-2">Título del Proyecto</label>
            <input type="text" id="project-title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" />

            <label for="career" class="block text-subtitle text-sm font-bold mb-2">Carrera</label>
            <input type="text" id="career" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" />

            <label for="start-date" class="block text-subtitle text-sm font-bold mb-2">Inicio</label>
            <input type="date" id="start-date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" />

            <label for="end-date" class="block text-subtitle text-sm font-bold mb-2">Fin</label>
            <input type="date" id="end-date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" />

            <label for="objectives" class="block text-subtitle text-sm font-bold mb-2">1. Objetivo General del Proyecto.</label>
            <textarea id="objectives" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"></textarea>

            <label for="problem-statement" class="block text-subtitle text-sm font-bold mb-2">2. Planteamiento del Problema:</label>
            <textarea id="problem-statement" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"></textarea>

            <label for="justification" class="block text-subtitle text-sm font-bold mb-2">3. Justificación</label>
            <textarea id="justification" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"></textarea>

            <label for="activities" class="block text-subtitle text-sm font-bold mb-2">4. Actividades a realizar</label>
            <textarea id="activities" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"></textarea>

            <div class="flex items-center justify-between mt-4 actions">
                <button class="text-blue-700 hover:text-blue-700 mx-10">
                    Editar
                </button>               
                <button class="text-red-600 hover:text-red-700 mx-">
                    Eliminar
                </button>            
            </div>
        </form>
    </div>
</div>
</body>

</html>
@endsection