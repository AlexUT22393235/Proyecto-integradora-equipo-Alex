@extends('plantillaAlumno')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Ante-Proyecto</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
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
            border-radius: 10px;
            padding: 20px;
            margin: 0 auto;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="centered-box">
        <form action="{{ route('proyectos.store') }}" method="POST" class="container mx-auto p-8">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="flex justify-center items-center mb-4">
                    <h1 class="text-2xl font-bold text-blue-900">Registro Ante-Proyecto</h1>
                </div>

                {{--! AGREGAR DESPUES --}}

                {{-- <div class="mb-4">
                    <label for="collaborator-matricula-select" class="block text-subtitle text-sm font-bold mb-2">Matrícula del Colaborador:</label>
                    <div class="flex items-start justify-between">
                        <select name="collaborator_matricula" id="collaborator-matricula-select" class="input-field block w-full p-2 rounded-lg bg-gray-100 mr-4">
                            <option value="no-aplica">No Aplica</option>
                            <!-- Suponiendo que quieres enviar el valor real de 'otro', puedes ajustarlo aquí -->
                            <option value="otro">22393138</option>
                        </select>
                        <div>
                            <!-- Este botón puede ser para funcionalidad JS adicional, no está ligado directamente al formulario -->
                            <button id="toggle-search-section-btn" type="button" class="block bg-gray-400 text-white px-4 py-2 rounded-md hover:bg-gray-500 focus:outline-none focus:bg-gray-500">
                                Agregar
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="company-name" class="block text-subtitle text-sm font-bold mb-2">Empresa</label>
                    <input type="text" name="empresa" id="company-name" class="input-field block w-full p-2 rounded-lg bg-gray-100"  />
                </div>

                <div class="mb-4">
                    <label for="advisor-name" class="block text-subtitle text-sm font-bold mb-2">Asesor</label>
                    <input type="text" name="asesor" id="advisor-name" class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                </div> --}}

                {{--! AGREGAR DESPUES --}}

                <div class="mb-4">
                    <label class="block text-subtitle text-sm font-bold mb-2">Título del Proyecto</label>
                    <input type="text" name="titulo" class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                </div>

                <div class="mb-4">
                    <label class="block text-subtitle text-sm font-bold mb-2">Objetivo General del Proyecto</label>
                    <textarea name="objetivo" class="input-field block w-full p-2 rounded-lg bg-gray-100"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-subtitle text-sm font-bold mb-2">Planteamiento del Problema</label>
                    <textarea name="planteamiento" class="input-field block w-full p-2 rounded-lg bg-gray-100"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-subtitle text-sm font-bold mb-2">Justificación</label>
                    <textarea name="justificacion" class="input-field block w-full p-2 rounded-lg bg-gray-100"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-subtitle text-sm font-bold mb-2">Actividades a Realizar</label>
                    <textarea name="actividades" class="input-field block w-full p-2 rounded-lg bg-gray-100"></textarea>
                </div>

                <div class="flex mb-4">
                    <div class="w-full mr-2">
                        <label class="block mb-2 text-sm font-bold text-subtitle">Fecha de Inicio</label>
                        <input type="date" name="fecha_inicial" class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>
                    <div class="w-full ml-2">
                        <label class="block mb-2 text-sm font-bold text-subtitle">Fecha de Finalización</label>
                        <input type="date" name="fecha_final" class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>
                </div>

                <div class="flex justify-end">
                    <button  type="submit" class="block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600" onclick="mostrarAlerta()">Crear proyecto</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('toggle-search-section-btn').addEventListener('click', function() {
            var searchSection = document.getElementById('collaborator-search-section');
            searchSection.classList.toggle('hidden');
        });

        function toggleMatriculaInput(select) {
            var matriculaInput = document.getElementById('collaborator-matricula');
            if (select.value === "otro") {
                matriculaInput.classList.remove('hidden');
            } else {
                matriculaInput.classList.add('hidden');
            }
        }


        function mostrarAlerta() {
        alert("¡El proyecto ha sido registrado exitosamente!");
    }
    </script>

</body>
</html>
@endsection
