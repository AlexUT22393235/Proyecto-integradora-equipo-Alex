@vite('resources/css/app.css')
@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permisos</title>
</head>
<body class="bg-blue-50">
    <main>
         {{-- Titulo --}}
         <div class=" border-b px-5 py-3 text-2xl mx-5 font-bold">
            Gestión de Permisos
          </div>

          {{-- Agregar --}}
          <div class="flex mt-5" style="margin-left: 1000px;">
            <button id="open-modal-btn"
                type="button"
                class="block mx-20 bg-sge text-white px-4 py-2 rounded-md hover:bg-[#1e3349] focus:outline-none focus:bg-[#1e3349]"
            >
            Agregar Nuevo Rol
            </button>
        </div>
        
        {{-- Tabla --}}
        <div class="mt-5 mx-20 overflow-auto h-250 border-separate border border-gray-300 bg-gray-200 rounded-t-lg items-center">
            <table class="w-full table-auto bg-gray-200 rounded-t-lg">
                <thead class="text-center text-white bg-sge">
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Rol</th>
                        <th class="p-2">Permisos</th>
                        <th class="p-2">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center bg-white">
                    @foreach(range(1, 5) as $index)
                        <tr class= 'border border-gray-200'>
                            <td>{{ $index }}</td>
                            <td>Rol {{ $index }}</td>  
                            <td>

 <!-- Botón para abrir el modal -->
<button id="openModalButton" class="text-white bg-sge hover:bg-[#1e3349] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Ver permisos
    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg>
</button>


<!-- Contenido del modal -->
<div id="modal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-50 backdrop-blur-sm justify-center items-center flex w-1/8 h-1/8">

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-medium leading-normal text-black">Selecciona los permisos:</h3>
        @foreach(range (1, 10) as $range) 
        <label class="flex items-center mt-3">         
            <input type="checkbox" class="w-4 h-4 text-sge bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <span class="ms-2 text-sm font-medium text-black">Permiso {{$range}} </span>
            
        </label>
        @endforeach
        <!-- Agrega más checkboxes según tus necesidades -->
        <button id="closeModalButton" class="mt-4 text-blue-600 hover:underline focus:outline-none">Cerrar</button>
    </div>

  


                            </td>
                            <td class="pt-2 flex justify-center space-x-10">
                                <button
                                    type="button"
                                    class="  px-4 py-2"
                                >
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAcBJREFUSEvt1MtKw0AYBeAzSdulNxRBQcWNiODCrS7E8TmkahsVmlYU9wW3pa1RRB3qwocQoQ2l9YZrH0BdiA/gxkrsSLxQNZem6YiCZpvM/3HOzITghx7yQy6Ewko23/cUkEguRm/qBRIGz2rlrgCMC4BLsoHxnRV664YLgefTRx1SMHgCjuE37KYeLgSOaoUcQOa+JLyWDUw4JRcChzPFtqBc1QGMfcI5X2WJ6bRd5b7hpe3jdsOoqEyl6yCEW3CODZagy0777At+RR+PAYwA/ICpNGziqnbY8kBCJXByyeJ0RujhUlLFTh56qXW0NpjvM5VGTFzZzbf23J3eJ5PJqjDYRBGqnnBgyDq0lrzeHTbfe67aHTVHfQMcyRa6JYmU7JM2jnpK/ILK5IxzDDpUyJg6tWDur5eK379xrXoxrfdWgyi7onGqNALWhU30KYBTAP0Og7dYnKp+UMeqvxt1hKOafgVgwDYNR4Yl6IrfpK5VRzXd/qAQpJhK15pF3RJbYYGod1gw6ghHNvOT73XKhFR2Y9PnIur9OMPzL/MfbrYB26odr5NPjcWpxfldsLKhJ32Gs122l6CWeX/vVD8DNwKwH24kwnEAAAAASUVORK5CYII="/> 
                                <button
                                    type="button"
                                    class=" px-4 py-2"
                                >
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlj1Ow0AQhd8saaigiSM6joA4QGK8zgkgEgUIboCE6DE1BRwhCBokOEG8xrkA4gh0KI4ikYom2kFrCUggif8ihcLb7r75Zp531kNY0qIlcZEazK3WSn8wOGMhVqclS1p/VOv1S/I8naaY1OBIymsAJ/OCMvNVLQhOFwaOpDwC0E4TEMC+pdR90tmJivuuazPzU5Iozz4R7VR9P/zS/g/wm21vikrlOE9FSRo9GrU3wvB1asXj4qjZ3CLm9aSAcy8b0bvV6bxM7YJZwshxQhA1ioDB3LWCwC7BxoGZD8hvq5noIhZobf/5BMxdFiJuFWI+/7Z2EVZbSsVJ9lzXmwgOwCRV833P7EdScgkudKtLq8ftKy9X2U6F2slMECYAM5v/tRmFxtcNEcWj0cQEs4gnM9fvMRdYygcAu7mAP6JHS6m9TFb3pDwg4LYImIHDmlJ3mcDmcN9xtiFEQwNrWRIQwBBad6tB8DxLl3qgzwJOc3Zp4E8+h0kuW0jNVgAAAABJRU5ErkJggg=="/> 
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
    </main>

    <div id="modal" class="fixed inset-0 flex items-center justify-center z-10 hidden">
        <div class="absolute inset-0 bg-black opacity-75 modal-overlay" onclick="closeModal()"></div>
        <div class="bg-white p-8 rounded-lg z-20 modal-container w-96"> <!-- Ajuste del ancho del modal -->
            <span id="close-modal-btn" class="close absolute top-0 right-0 p-4">&times;</span>
            <h2 class="text-lg font-bold mb-4">Agregar Nuevo Rol</h2>
            <form>
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Rol</label>
                    <input type="text" id="nomina" name="nomina" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Permisos</label>
                    <input type="text" id="nombre" name="nombre" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-sge text-white rounded-lg">Guardar</button>
                    <button type="button" class="px-4 py-2 bg-gray-300  text-gray-700 rounded-lg ml-4" onclick="closeModal()">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
    
    
    <!-- JavaScript para controlar el modal -->
    <script>
        // Función para abrir el modal
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        // Función para cerrar el modal
        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        // Evento para abrir el modal cuando se hace clic en el botón "Agregar nuevo Directivo"
        document.getElementById('open-modal-btn').addEventListener('click', openModal);

        // Evento para cerrar el modal cuando se hace clic en el botón de cierre
        document.getElementById('close-modal-btn').addEventListener('click', closeModal);

        // Evento para cerrar el modal cuando se hace clic en el botón "Cancelar"
        document.getElementById('cancel-modal-btn').addEventListener('click', closeModal);
    </script>


<script>
    const openModalButton = document.getElementById('openModalButton');
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('modal');

    openModalButton.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
        // Ocultar la pestaña de selección de opciones
        document.getElementById('modaluser').style.display = 'none';
        document.getElementById('modalpassword').style.display = 'none';
    });
</script>
</body>
</html>
@endsection