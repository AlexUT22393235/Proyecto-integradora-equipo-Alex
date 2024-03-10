@extends('plantilla')

@section('content')

<div>
    <h1 class="text-2xl text-gray-500 m-9 font-bold ">Asignacion de Asesores</h1>
</div>

<div class="flex justify-between">
    <div class="bg-blue-100 p-4 w-1/3 h-full mb-2 ml-32 border border-grey mr-2 rounded-xl " style="max-height: 600px;">
        <h2 class="text-xl font-bold mb-4">Asesores</h2>
        <div class="mb-4">
            <input type="text" placeholder="Buscar asesor" class="border border-gray-300 rounded-md px-4 py-2">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-xl shadow-lg">Buscar</button>
        </div>

        <div class="space-y-5 space-x-5 max-h-80 overflow-y-auto">
            <div key="1" class="bg-white p-4 rounded-md cursor-pointer hover:bg-gray-50" onclick="onSelectCard({ id: 1, title: 'Asesor 1', description: 'Descripción del asesor 1' })">
                <h3 class="text-lg font-semibold">Profesor Rafael Villegas</h3>
                <p class="text-blue-500">Descripción del asesor 1</p>
            </div>

            <div key="2" class="bg-white p-4 rounded-md cursor-pointer hover:bg-gray-50" onclick="onSelectCard({ id: 2, title: 'Asesor 2', description: 'Descripción del asesor 255' })">
                <h3 class="text-lg font-semibold">Asesor 2</h3>
                <p class="text-gray-500">Descripción del asesor 2</p>
            </div>

            <div key="3" class="bg-white p-4 rounded-md cursor-pointer hover:bg-gray-50" onclick="onSelectCard({ id: 3, title: 'Asesor 3', description: 'Descripción del asesor 3' })">
                <h3 class="text-lg font-semibold">Asesor 3</h3>
                <p class="text-gray-500">Descripción del asesor 3</p>
            </div>

            <div key="4" class="bg-white p-4 rounded-md cursor-pointer hover:bg-gray-50" onclick="onSelectCard({ id: 4, title: 'Asesor 4', description: 'Descripción del asesor 4' })">
                <h3 class="text-lg font-semibold">Asesor 4</h3>
                <p class="text-gray-500">Descripción del asesor 4</p>
            </div>

            <div key="5" class="bg-white p-4 rounded-md cursor-pointer hover:bg-gray-50" onclick="onSelectCard({ id: 5, title: 'Asesor 5', description: 'Descripción del asesor 5' })">
                <h3 class="text-lg font-semibold">Asesor 5</h3>
                <p class="text-gray-500">Descripción del asesor 5</p>
            </div>
        </div>
    </div>

    <div id="card-details" class="bg-blue-100 p-4 w-1/3 ml-2 mb-4 mt-0 mr-32 hover:bg-gray-50 rounded-xl  border-grey">
        <!-- Contenido del elemento -->

        
    </div>
    
</div>

<!-- Aquí se mostrarán los detalles de la tarjeta seleccionada -->

<script>
    function onSelectCard(card) {
        // Actualiza el contenido de #card-details con los detalles de la tarjeta seleccionada
        document.getElementById('card-details').innerHTML = `
            <h3 class="text-lg font-semibold">${card.title}</h3>
            <p class="text-gray-500">${card.description}</p>
           <div class="flex flex-row justify-between">
            <button id="addDocumentButton" class="px-8 py-2 bg-sge text-white rounded-xl shadow-lg m-9 flex-center text-center"  onclick="openModal()" >  Asignar </button>
            <button id="addDocumentButton" class="px-8 py-2 bg-sge text-white rounded-xl shadow-lg m-9 flex-center text-center"  onclick="openModal()" > Editar Asignacion </button>

            </div>
        `;
    }
</script>

@endsection