@extends('plantillaPresidente')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Presidente</title>
    <!-- Agrega la CDN de Tailwind CSS -->
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>


<body style="background-color: #EEF1F9">

    <div>
        <div class="container mx-auto mt-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                <a href="/controlProyectoPresidente" class="border-l-4 border-blue-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Proyectos</h3>
                        <img src="/proyecto.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Proyectos en el área de ingeniería</p>
                    </div>
                </a>

                <a href="/CrudAsesorDeAdmin" class="border-l-4 border-blue-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Asesores</h3>
                        <img src="/asesor.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Administrar asesores del área de ingeniería</p>
                    </div>
                </a>

             

                <a href="/asesoresyestudiantes" class="border-l-4 border-red-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Asignación de Asesores</h3>
                        <img src="/alumno.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Información sobre los asesores y sus alumnos</p>
                    </div>
                </a>

                <a href="/Admindocs" class="border-l-4 border-red-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Documentos</h3>
                        <img src="/documento.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Documentos de los alumnos</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <!-- Contenido del pie de página -->
    </footer>
    <!-- Fin del Footer -->

</body>
</html> 
@endsection
