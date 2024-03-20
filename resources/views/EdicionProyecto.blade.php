@extends('plantillaAlumno')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion Ante-Proyecto</title>
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
        <div class="container mx-auto p-8">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="flex justify-center items-center mb-4">
                    <h1 class="text-2xl font-bold text-blue-900">Edición Ante-Proyecto:</h1>
                </div>
                
 
                <div id="collaborator-search-section" class="hidden mb-4">
                    <label for="search-collaborator" class="block text-subtitle text-sm font-bold mb-2">Matrícula del Colaborador:</label>
                    <input type="text" id="search-collaborator" placeholder="Ingrese la matrícula" class="input-field block w-full p-2 rounded-lg bg-gray-100 mb-4" />
                    <button id="open-modal-btn" type="button" class="block bg-gray-400 text-white px-4 py-2 rounded-md hover:bg-gray-500 focus:outline-none focus:bg-gray-500">Aceptar</button>

                </div>

                <!-- Simulación de secciones de formulario actualizadas tras la búsqueda -->
                <div class="mb-4">
                    <label for="collaborator-matricula-select" class="block text-subtitle text-sm font-bold mb-2">Matrícula del Colaborador:</label> 
                    <div class="flex items-start justify-between">
                        <select id="collaborator-matricula-select" class="input-field block w-full p-2 rounded-lg bg-gray-100 mr-4" onchange="toggleMatriculaInput(this)">
                            <option value="no-aplica">No Aplica</option>
                            <option value="otro">22393138</option>
                        </select>
                        <div>
                            <button id="toggle-search-section-btn" class="block bg-gray-400 text-white px-4 py-2 rounded-md hover:bg-gray-500 focus:outline-none focus:bg-gray-500">
                                Agregar
                            </button>
                        </div>
                    </div>
                    
                </div>
                <div id="collaborator-search-section" class="hidden mb-4">
                    <label for="search-collaborator" class="block text-subtitle text-sm font-bold mb-2">Matrícula del Colaborador:</label>
                    <input type="text" id="search-collaborator" placeholder="Ingrese la matrícula" class="input-field block w-full p-2 rounded-lg bg-gray-100 mb-4" />
                    <button id="search-collaborator-btn" class="block bg-gray-400 text-white px-4 py-2 rounded-md hover:bg-gray-500 focus:outline-none focus:bg-gray-500">
                        Aceptar 
                    </button>
                </div>

                
                





                <div id="collaborator-search-section" class="hidden mb-4">
                    <label for="search-collaborator" class="block text-subtitle text-sm font-bold mb-2">Buscar Colaborador:</label>
                    <input type="text" id="search-collaborator" placeholder="Matricula" class="input-field block w-full p-2 rounded-lg bg-gray-100 mb-4" />
                </div>

                <div class="mb-4">
                    <label class="block text-subtitle text-sm font-bold mb-2">Empresa</label>
                    <input type="text" id="company-name" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100"  />
                </div>

                <div class="mb-4">
                    <label class="block text-subtitle text-sm font-bold mb-2">Asesor</label>
                    <input type="text" id="advisor-name" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                </div>

                <div class="mb-4">
                    <label class="block text-subtitle text-sm font-bold mb-2">Título del Proyecto</label>
                    <input type="text" id="project-title" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100"  />
                </div>

                <div class="mb-4">
                    <label class="block text-subtitle text-sm font-bold mb-2">Carrera</label>
                    <input type="text" id="career" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100"  />
                </div>

                <div class="flex mb-4">
                    <div class="flex-grow mr-4">
                        <label class="block mb-2 text-sm font-bold text-subtitle">Inicio</label>
                        <input type="date" id="start-date" class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>
                    <div class="flex-grow">
                        <label class="block mb-2 text-sm font-bold text-subtitle">Final</label>
                        <input type="date" id="end-date" class="input-field block w-full p-2 rounded-lg bg-gray-100" />
                    </div>
                </div>
                

                <div class="mb-4">
                    <label for="objectives" class="block text-subtitle text-sm font-bold mb-2">1. Objetivo General del Proyecto</label>
                    <textarea id="objectives" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100"></textarea>
                </div>

                <div class="mb-4">
                    <label for="problem-statement" class="block text-subtitle text-sm font-bold mb-2">2. Planteamiento del Problema</label>
                    <textarea id="problem-statement" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100"></textarea>
                </div>
                
                <div class="mb-4">
                    <label for="justification" class="block text-subtitle text-sm font-bold mb-2">3. Justificación</label>
                    <textarea id="justification" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100"></textarea>
                </div>

                <div class="mb-4">
                    <label for="activities" class="block text-subtitle text-sm font-bold mb-2">4. Actividades a realizar</label>
                    <textarea id="activities" readonly class="input-field block w-full p-2 rounded-lg bg-gray-100"></textarea>
                </div>

                <div class="flex justify-end">
                    <button id="open-modal-btn" type="button" class="block bg-sge text-white px-4 py-2 rounded-md hover:bg-[#1e3349] focus:outline-none focus:bg-[#1e3349]">Guardar Cambios</button>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggle-search-section-btn').addEventListener('click', function() {
            var searchSection = document.getElementById('collaborator-search-section');
            searchSection.classList.toggle('hidden');
        });

        document.getElementById('search-collaborator-btn').addEventListener('click', function() {
            var matricula = document.getElementById('search-collaborator').value;
            // Ajusta la URL según tu implementación específica
            fetch(`/buscar-colaborador/${matricula}`, {
                method: 'GET', // O POST, según la configuración de tu backend
            })
            .then(response => response.json())
            .then(data => {
                // Asume que 'data' es un objeto con la matrícula y nombre del colaborador
                document.getElementById('collaborator-matricula').value = data.matricula;
                document.getElementById('collaborator-name').value = data.nombre;
                // Añade aquí actualizaciones a otros campos si es necesario
            })
            .catch(error => console.error('Error:', error));
        });


        function toggleMatriculaInput(select) {
        var matriculaInput = document.getElementById('collaborator-matricula');
        if (select.value === "otro") {
            matriculaInput.classList.remove('hidden');
        } else {
            matriculaInput.classList.add('hidden');
        }
    }
    </script>
</body>
</html>

@endsection
