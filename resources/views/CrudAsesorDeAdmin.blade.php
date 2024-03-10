@vite('resources/css/app.css')
@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD ASESOR</title>
</head>
<body>
    <main>
        <div class="bg-[#7ea3ca]">
            <h1 class="text-3xl font-bold text-center text-white">Crud Asesor</h1>
        </div>

        <div class="mt-5 mx-auto max-w-2xl">
            <button id="open-modal-btn"
                type="button"
                class="block mx-auto bg-[#325b87] text-white px-4 py-2 rounded-md hover:bg-[#1e3349] focus:outline-none focus:bg-[#1e3349]"
            >
            Agregar Nuevo Asesor
            </button>
        </div>

        <div class="mt-5 mx-20 overflow-auto h-250 border-separate border border-gray-300 bg-gray-200 rounded-t-lg items-center">
            <table class="w-full table-auto bg-gray-200 rounded-t-lg">
                <thead class="text-center text-white bg-[#325b87]">
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Nomina</th>
                        <th class="p-2">Nombre del Asesor</th>
                        <th class="p-2">Carrera - División</th>
                        <th class="p-2">Proyectos  Asignados</th>
                        <th class="p-2">Estatus</th>
                        <th class="p-2">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center bg-white">
                    @foreach(range(1, 10) as $index)
<<<<<<< HEAD
                        <tr class= 'border border-gray-200'>
=======
                        <tr class="border">
>>>>>>> a1e375914cbb1bf1c2332b9962c94d1aae9869b9
                            <td>{{ $index }}</td>
                            <td>Nomina {{ $index }}</td>
                            <td>Docente - NA {{ $index }}</td>
                            <td>Ingenieria - Software</td>
                            <td>3 Memorias</td>
                            <td>Activo</td>
                            <td class="pt-2 flex justify-center space-x-10">
                                <button
                                    type="button"
<<<<<<< HEAD
                                    class="  px-4 py-2 rounded-full focus:outline-none focus:ring-4 "
                                >
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAcBJREFUSEvt1MtKw0AYBeAzSdulNxRBQcWNiODCrS7E8TmkahsVmlYU9wW3pa1RRB3qwocQoQ2l9YZrH0BdiA/gxkrsSLxQNZem6YiCZpvM/3HOzITghx7yQy6Ewko23/cUkEguRm/qBRIGz2rlrgCMC4BLsoHxnRV664YLgefTRx1SMHgCjuE37KYeLgSOaoUcQOa+JLyWDUw4JRcChzPFtqBc1QGMfcI5X2WJ6bRd5b7hpe3jdsOoqEyl6yCEW3CODZagy0777At+RR+PAYwA/ICpNGziqnbY8kBCJXByyeJ0RujhUlLFTh56qXW0NpjvM5VGTFzZzbf23J3eJ5PJqjDYRBGqnnBgyDq0lrzeHTbfe67aHTVHfQMcyRa6JYmU7JM2jnpK/ILK5IxzDDpUyJg6tWDur5eK379xrXoxrfdWgyi7onGqNALWhU30KYBTAP0Og7dYnKp+UMeqvxt1hKOafgVgwDYNR4Yl6IrfpK5VRzXd/qAQpJhK15pF3RJbYYGod1gw6ghHNvOT73XKhFR2Y9PnIur9OMPzL/MfbrYB26odr5NPjcWpxfldsLKhJ32Gs122l6CWeX/vVD8DNwKwH24kwnEAAAAASUVORK5CYII="/> 
                                </button>
                                <button
                                    type="button"
                                    class=" px-4 py-2 rounded-full hover:bg-yellow-50 focus:outline-none focus:ring-4"
                                >
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlj1Ow0AQhd8saaigiSM6joA4QGK8zgkgEgUIboCE6DE1BRwhCBokOEG8xrkA4gh0KI4ikYom2kFrCUggif8ihcLb7r75Zp531kNY0qIlcZEazK3WSn8wOGMhVqclS1p/VOv1S/I8naaY1OBIymsAJ/OCMvNVLQhOFwaOpDwC0E4TEMC+pdR90tmJivuuazPzU5Iozz4R7VR9P/zS/g/wm21vikrlOE9FSRo9GrU3wvB1asXj4qjZ3CLm9aSAcy8b0bvV6bxM7YJZwshxQhA1ioDB3LWCwC7BxoGZD8hvq5noIhZobf/5BMxdFiJuFWI+/7Z2EVZbSsVJ9lzXmwgOwCRV833P7EdScgkudKtLq8ftKy9X2U6F2slMECYAM5v/tRmFxtcNEcWj0cQEs4gnM9fvMRdYygcAu7mAP6JHS6m9TFb3pDwg4LYImIHDmlJ3mcDmcN9xtiFEQwNrWRIQwBBad6tB8DxLl3qgzwJOc3Zp4E8+h0kuW0jNVgAAAABJRU5ErkJggg=="/> 
                                </button>
=======
                                    class=" text-black px-4 py-2 rounded-full  focus:outline-none focus:ring-4 focus:ring-red-300"
                                >
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlj1Ow0AQhd8saaigiSM6joA4QGK8zgkgEgUIboCE6DE1BRwhCBokOEG8xrkA4gh0KI4ikYom2kFrCUggif8ihcLb7r75Zp531kNY0qIlcZEazK3WSn8wOGMhVqclS1p/VOv1S/I8naaY1OBIymsAJ/OCMvNVLQhOFwaOpDwC0E4TEMC+pdR90tmJivuuazPzU5Iozz4R7VR9P/zS/g/wm21vikrlOE9FSRo9GrU3wvB1asXj4qjZ3CLm9aSAcy8b0bvV6bxM7YJZwshxQhA1ioDB3LWCwC7BxoGZD8hvq5noIhZobf/5BMxdFiJuFWI+/7Z2EVZbSsVJ9lzXmwgOwCRV833P7EdScgkudKtLq8ftKy9X2U6F2slMECYAM5v/tRmFxtcNEcWj0cQEs4gnM9fvMRdYygcAu7mAP6JHS6m9TFb3pDwg4LYImIHDmlJ3mcDmcN9xtiFEQwNrWRIQwBBad6tB8DxLl3qgzwJOc3Zp4E8+h0kuW0jNVgAAAABJRU5ErkJggg=="/>                                </button>
                                <button
                                    type="button"
                                    class=" text-white px-4 py-2 rounded-fullfocus:outline-none focus:ring-4 focus:ring-yellow-300"
                                >
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAcBJREFUSEvt1MtKw0AYBeAzSdulNxRBQcWNiODCrS7E8TmkahsVmlYU9wW3pa1RRB3qwocQoQ2l9YZrH0BdiA/gxkrsSLxQNZem6YiCZpvM/3HOzITghx7yQy6Ewko23/cUkEguRm/qBRIGz2rlrgCMC4BLsoHxnRV664YLgefTRx1SMHgCjuE37KYeLgSOaoUcQOa+JLyWDUw4JRcChzPFtqBc1QGMfcI5X2WJ6bRd5b7hpe3jdsOoqEyl6yCEW3CODZagy0777At+RR+PAYwA/ICpNGziqnbY8kBCJXByyeJ0RujhUlLFTh56qXW0NpjvM5VGTFzZzbf23J3eJ5PJqjDYRBGqnnBgyDq0lrzeHTbfe67aHTVHfQMcyRa6JYmU7JM2jnpK/ILK5IxzDDpUyJg6tWDur5eK379xrXoxrfdWgyi7onGqNALWhU30KYBTAP0Og7dYnKp+UMeqvxt1hKOafgVgwDYNR4Yl6IrfpK5VRzXd/qAQpJhK15pF3RJbYYGod1gw6ghHNvOT73XKhFR2Y9PnIur9OMPzL/MfbrYB26odr5NPjcWpxfldsLKhJ32Gs122l6CWeX/vVD8DNwKwH24kwnEAAAAASUVORK5CYII="/>                                </button>
>>>>>>> a1e375914cbb1bf1c2332b9962c94d1aae9869b9
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <div id="modal" class="fixed inset-0 flex items-center justify-center z-10 hidden">
        <div class="absolute inset-0 bg-black opacity-75 modal-overlay" onclick="closeModal()"></div>
        <div class="bg-white p-8 rounded-lg z-20 modal-container w-96"> <!-- Ajuste del ancho del modal -->
            <span id="close-modal-btn" class="close absolute top-0 right-0 p-4">&times;</span>
            <h2 class="text-lg font-bold mb-4">Agregar Nuevo Asesor</h2>
            <form>
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nomina</label>
                    <input type="text" id="nomina" name="nomina" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre del Asesor</label>
                    <input type="text" id="nombre" name="nombre" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Carrera - División</label>
                    <input type="text" id="division" name="division" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Proyectos Asignados</label>
                    <input type="text" id="proyectos" name="proyectos" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Estatus</label>
                    <input type="text" id="estatus" name="estatus" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
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
</body>
</html>
@endsection