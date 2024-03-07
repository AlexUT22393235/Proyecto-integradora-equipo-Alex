@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>SGE</title>
</head>

<body class="bg-gray-100">

    
    <div>
        <p class="bg-gray-200 p-4 mb-10 mt-4 text-center text-3xl font-bold border-t-2 border-b-2 border-black">
            Visualización y Asignación
          </p>




    </div>
    <div class="flex justify-between">
        <div class="bg-gray-200 p-4 w-1/4 mb-10 ml-10 border border-black mb-4 ml-4 mr-4 mt-4">
            <h2 class="text-xl font-bold mb-4">Asesores</h2>
            <p class="text-sm text-gray-500 font-bold mb-4">Selecciona un asesor para visualizar</p>



            <div class="space-y-4">
                <div key="1" class="bg-white p-4 rounded-md cursor-pointer hover:bg-green-100" onclick="onSelectCard({ id: 1, title: 'Asesor 1', description: 'Descripción del asesor 1' })">
                    <h3 class="text-lg font-semibold">Profesor Rafael Villegas</h3>
                    <p class="text-gray-500">Descripción del asesor 1</p>
                </div>

                <div key="2" class="bg-white p-4 rounded-md cursor-pointer hover:bg-green-100" onclick="onSelectCard({ id: 2, title: 'Asesor 2', description: 'Descripción del asesor 255' })">
                    <h3 class="text-lg font-semibold">Asesor 2</h3>
                    <p class="text-gray-500">Descripción del asesor 2</p>
                </div>

                <div key="3" class="bg-white p-4 rounded-md cursor-pointer hover:bg-green-100" onclick="onSelectCard({ id: 3, title: 'Asesor 3', description: 'Descripción del asesor 3' })">
                    <h3 class="text-lg font-semibold">Asesor 3</h3>
                    <p class="text-gray-500">Descripción del asesor 3</p>
                </div>

                <div key="4" class="bg-white p-4 rounded-md cursor-pointer hover:bg-green-100" onclick="onSelectCard({ id: 4, title: 'Asesor 4', description: 'Descripción del asesor 4' })">
                    <h3 class="text-lg font-semibold">Asesor 4</h3>
                    <p class="text-gray-500">Descripción del asesor 4</p>
                </div>

                <div key="5" class="bg-white p-4 rounded-md cursor-pointer hover:bg-green-100" onclick="onSelectCard({ id: 5, title: 'Asesor 5', description: 'Descripción del asesor 5' })">
                    <h3 class="text-lg font-semibold">Asesor 5</h3>
                    <p class="text-gray-500">Descripción del asesor 5</p>
                </div>
            </div>
        </div>

        <div id="card-details" class="bg-gray-200 p-4 w-1/4 ml-4 border-black mb-4 ml-4 mr-4 mt-4">
            <!-- Aquí se mostrarán los detalles de la tarjeta seleccionada -->
        </div>
    </div>

    <script>
        function onSelectCard(card) {
            // Actualiza el contenido de #card-details con los detalles de la tarjeta seleccionada
            document.getElementById('card-details').innerHTML = `
                <h3 class="text-lg font-semibold">${card.title}</h3>
                <p class="text-gray-500">${card.description}</p>
            `;
        }
    </script>

</body>

</html>
@endsection