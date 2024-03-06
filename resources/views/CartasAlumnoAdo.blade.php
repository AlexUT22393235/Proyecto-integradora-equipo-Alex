@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de cartas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex flex-col">
        <div style="background: linear-gradient(to right, #63D8CC, #325b87)" class="text-left relative">
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm mt-5 font-medium">Bienvenido, (Docente)!</p>
                        <h1 class="text-2xl mt-5 mb-3 font-semibold">Control de Cartas de Alumnos Asesorados <i class="fas fa-envelope-open-text text-xl ml-2"></i></h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenedor especial con sidebar y formulario -->
        <div style="background-color: #A7EDE5" class="flex">
            <script>
                // Función para alternar el estado del formulario entre minimizado y expandido
                function toggleMinimize() {
                    const formContainer = document.getElementById('form-container');
                    formContainer.classList.toggle('minimized');
                }
            </script>

            @include('sidebar')
            <!-- Sidebar -->
            @include('cartaform')
            <!-- Formulario -->

        </div>
    </div>
</body>
</html>
@endsection