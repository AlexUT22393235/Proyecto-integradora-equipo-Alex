@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Form Page</title>
</head>

<body class="form-page">


 
    

    <div class="relative mb-8 shadow-md bg-white">
        <hr class="mb-4 border-t-2 border-blue-900">
        <div class="block mb-6 ml-5 text-4xl">
            Edición del ante-proyecto
        </div>
        <hr class="mt-6 border-b-2 border-blue-900">
    </div>

    <div class="mb-4 bg-white">
        <hr class="mb-4 border-t-2 border-gray-900">
        <div class="block mb-8 ml-5 text-1xl">
            <div class="block mb-8 ml-5">
                <label for="student-id" class="block mb-2 text-xl text-subtitle">
                    Ingresa la Matricula del Estudiante Colaborador
                </label>
                <div class="flex">
                    <input type="text" id="student-id"
                        class="w-1/2 px-3 py-2 mr-2 leading-tight text-gray-700 border-2 border-blue-900 rounded-lg shadow appearance-none focus:outline-none focus:shadow-outline" />
                    <button type="button" class="px-2 py-2 font-bold text-white shadow-lg bg-blue-950 rounded-xl hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                        BUSCAR
                    </button>
                </div>
            </div>
        </div>
        <hr class="mb-4 border-t-2 border-gray-900">
    </div>

    <div class="mx-5 mb-3">
        <h1 class="block mb-2 text-2xl font-bold text-center text-blue-900">Detalles Del Proyecto:</h1>
    </div>

    <div>
        <div class="container p-8 mx-auto">
            <form class="px-8 pt-6 pb-8 mb-4 rounded shadow-md project-details bg-white">

                <div class="flex mb-4 mr-4">
                    <div class="flex-grow mr-4">
                        <label for="company-name" class="block mb-2 text-sm font-bold text-subtitle">
                            Empresa
                        </label>
                        <input type="text" id="company-name"
                            class="w-full max-w-4xl px-3 py-2 mb-3 leading-tight text-gray-700 border-2 border-blue-900 rounded-lg shadow appearance-none focus:outline-none focus:shadow-outline" />
                    </div>
                    <div class="flex-grow mr-4">
                        <label for="advisor-name" class="block mb-2 text-sm font-bold text-subtitle">
                            Asesor
                        </label>
                        <input type="text" id="advisor-name"
                            class="w-full max-w-4xl px-3 py-2 mb-3 leading-tight text-gray-700 border-2 border-blue-900 rounded-lg shadow appearance-none focus:outline-none focus:shadow-outline" />
                    </div>
                </div>

                <div class="mb-1 mr-1">
                    <label for="project-title" class="block mb-2 text-sm font-bold text-subtitle">Título del
                        Proyecto</label>
                    <input type="text" id="project-title"
                        class="w-full max-w-4xl px-3 py-2 mb-3 leading-tight text-gray-700 border-2 border-blue-900 rounded-lg shadow appearance-none focus:outline-none focus:shadow-outline" />
                </div>

                <div class="mb-1 mr-1">
                    <label for="career" class="block mb-2 text-sm font-bold text-subtitle">Carrera</label>
                    <input type="text" id="career"
                        class="w-full max-w-4xl px-3 py-2 mb-3 leading-tight text-gray-700 border-2 border-blue-900 rounded-lg shadow appearance-none focus:outline-none focus:shadow-outline" />
                </div>

                <div class="flex mb-4 mr-4">
                    <div class="flex-grow mr-4 ">
                        <label for="company-name" class="block mb-2 text-sm font-bold text-subtitle">
                            Inicio
                        </label>
                        <input type="date" id="company-name"
                            class="w-full max-w-4xl px-3 py-2 mb-3 leading-tight text-gray-700 border-2 border-blue-900 rounded-lg shadow appearance-none focus:outline-none focus:shadow-outline" />
                    </div>
                    <div class="flex-grow mr-4">
                        <label for="advisor-name" class="block mb-2 text-sm font-bold text-subtitle">
                            Final
                        </label>
                        <input type="date" id="advisor-name"
                            class="w-full max-w-4xl px-3 py-2 mb-3 leading-tight text-gray-700 border-2 border-blue-900 rounded-lg shadow appearance-none focus:outline-none focus:shadow-outline" />
                    </div>
                </div>

                <div class="mb-4">
                    <div class="px-3 py-2 font-bold">1.- Objetivo General del Proyecto.</div>
                    <div class="h-8 bg-blue-900"></div>
                    <textarea id="objectives"
                        class="w-full px-3 py-2 mb-3 leading-tight text-white shadow appearance-none resize-none bg-blue-50 focus:outline-none focus:shadow-outline"></textarea>
                </div>

                <div class="mb-4">
                    <div class="px-3 py-2 font-bold">1.- Planteamiento del Problema: exponer los aspectos, elementos y
                        relaciones del problema.</div>
                    <div class="h-8 bg-blue-900"></div>
                    <textarea id="objectives"
                        class="w-full px-3 py-2 mb-3 leading-tight text-white shadow appearance-none resize-none bg-blue-50 focus:outline-none focus:shadow-outline"></textarea>
                </div>

                <div class="mb-4">
                    <div class="px-3 py-2 font-bold">3.- Justificación</div>
                    <div class="h-8 bg-blue-900"></div>
                    <textarea id="objectives"
                        class="w-full px-3 py-2 mb-3 leading-tight text-white shadow appearance-none resize-none bg-blue-50 focus:outline-none focus:shadow-outline"></textarea>
                </div>

                <div class="mb-4">
                    <div class="px-3 py-2 font-bold">4.- Actividades a realizar</div>
                    <div class="h-8 bg-blue-900"></div>
                    <textarea id="objectives"
                        class="w-full px-3 py-2 mb-3 leading-tight text-white shadow appearance-none resize-none bg-blue-50 focus:outline-none focus:shadow-outline"></textarea>
                </div>

                <div class="flex items-center justify-between mt-4 actions">
                    <button class="px-4 py-2 font-bold text-white shadow-lg bg-blue-950 rounded-xl hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                        Editar
                    </button>
                    <button class="px-4 py-2 font-bold text-white shadow-lg bg-blue-950 rounded-xl hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                        Eliminar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

@endsection