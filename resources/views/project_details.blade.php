@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Proyecto</title>
    <!-- Agrega tus enlaces CSS aquí -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        /* Estilos CSS */


        body {
            background-color: #f0f0f0;
        }

        
        .input-field {
            border-color: transparent;
            border-bottom-color: #f0f0f0;
            border-width: 1px;
        }
        .centered-box {
            width: 900px;
            /* background-color: #f0f0f0; */
            border-radius: 10px;
            padding: 20px;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="text-zinc-400 border-b border-zinc-400 px-5 py-3 text-xl mx-5">             Detalles Del Proyecto           </div>

    <div class="centered-box">
        <div class="container mx-auto p-8">
            <form  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                {{-- <form action="{{ route('submit.project') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"> --}}
                    @csrf


                    
                <div class="mb-4">
                    <h1 class="block text-2xl font-bold mb-2 text-center text-blue-900">Detalles Del Proyecto:</h1>

                    <div class="mb-4">
                        <label for="company-name" class="block text-subtitle text-sm font-bold mb-2">Empresa</label>
                        <input type="text" id="company-name" value="{{ $company }}" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>

                    <div class="mb-4">
                        <label for="advisor-name" class="block text-subtitle text-sm font-bold mb-2">Asesor</label>
                        <input type="text" id="advisor-name" value="{{ $advisor }}" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>

                    <div class="mb-4">
                        <label for="project-title" class="block text-subtitle text-sm font-bold mb-2">Título del Proyecto</label>
                        <input type="text" id="project-title" value="{{ $projectTitle }}" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>

                    <div class="mb-4">
                        <label for="career" class="block text-subtitle text-sm font-bold mb-2">Carrera</label>
                        <input type="text" id="career" value="{{ $career }}" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>



                    <div class="flex mb-4 mr-4">
                        <div class="flex-grow mr-4">
                            <label for="start-date" class="block text-subtitle text-sm font-bold mb-2">Inicio</label>
                            <input type="date" id="start-date" value="{{ $startDate }}" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                        </div>
                        <div class="flex-grow">
                            <label for="end-date" class="block mb-2 text-sm font-bold text-subtitle">Final</label>
                            <input type="date" id="end-date" value="{{ $endDate }}" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                        </div>
                    </div>




                    <div class="mb-4">
                        <label for="objectives" class="block text-subtitle text-sm font-bold mb-2">1. Objetivo General del Proyecto</label>
                        <textarea id="objectives" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">{{ $objectives }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="problem-statement" class="block text-subtitle text-sm font-bold mb-2">2. Planteamiento del Problema</label>
                        <textarea id="problem-statement" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">{{ $problemStatement }}</textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label for="justification" class="block text-subtitle text-sm font-bold mb-2">3. Justificación</label>
                        <textarea id="justification" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">{{ $justification }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="activities" class="block text-subtitle text-sm font-bold mb-2">4. Actividades a realizar</label>
                        <textarea id="activities" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100">{{ $activities }}</textarea>
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection