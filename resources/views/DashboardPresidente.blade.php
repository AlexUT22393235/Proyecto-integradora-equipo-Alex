@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo6</title>
    <!-- Agrega la CDN de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- HeaderPresi component -->
    <header>
        <!-- Inserta el contenido del componente HeaderPresi aquí -->
    </header>
    
    <div class="text-zinc-400 border-b border-zinc-400 px-5 py-3 text-xl mx-5">
        Bienvenido (Presidente)!
    </div>
    
    <div class=" ag-format-container">
        <div class="flex flex-wrap justify-between items-start px-0 md:px-4 py-8">
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <a href="#" class="block p-4 rounded-xl ag-courses-item shadow hover:bg-blue-300 hover:text-black transition duration-300 relative mr-30 ml-20">
                    <div class="h-32 mb-4 flex items-center justify-center">
                        <img src="/proyectos.png" alt="Proyectos" class="h-full">
                    </div>
                    <div class="text-xl font-bold">Proyectos</div>
                    <div>Proyectos del área de ingeniería</div>
                </a>
            </div>
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <a href="#" class="block p-4 rounded-xl ag-courses-item shadow hover:bg-blue-300 hover:text-black transition duration-300 relative ml-10">
                    <div class="h-32 mb-4 flex items-center justify-center">
                        <img src="/asesores.png" alt="Documentos" class="h-full">
                    </div>
                    <div class="text-xl font-bold">Asesores</div>
                    <div>Asesores del área de ingeniería</div>
                </a>
            </div>
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <a href="#" class="block p-4 rounded-xl ag-courses-item shadow hover:bg-blue-300 hover:text-black transition duration-300 relative mr-30 ml-10">
                    <div class="h-32 mb-4 flex items-center justify-center">
                        <img src="/estudiantes.png" alt="Asesores" class="h-full">
                    </div>
                    <div class="text-xl font-bold">Estudiantes</div>
                    <div>Estudiantes del área de ingeniería</div>
                </a>
            </div>
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <a href="#" class="block p-4 rounded-xl ag-courses-item shadow hover:bg-blue-300 hover:text-black transition duration-300 relative ml-10">
                    <div class="h-32 mb-4 flex items-center justify-center">
                        <img src="/documentos.png" alt="Estudiantes" class="h-full">
                    </div>
                    <div class="text-xl font-bold">Documentos</div>
                    <div>Documentos de estudiantes y asesores</div>
                </a>
            </div>
        </div>
    </div>
</body>
</html> 
@endsection