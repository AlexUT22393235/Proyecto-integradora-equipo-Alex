@extends('PlantillaAdmin')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tabla de Alumnos</title>
</head>

<body>
<div class="p-8">
    <div class="font-bold text-black border-b border-zinc-400 px-5 py-3 text-2xl mx-5">
        Lista de Alumnos
    </div>
    <div>
        <div class="">
            <div class="mt-5 max-w-2xl" style="margin-left: 1000px;">
                <button id="open-modal-btn" type="button" class="block mx-30 bg-[#325b87] text-white px-4 py-2 rounded-md hover:bg-[#1e3349] focus:outline-none focus:bg-[#1e3349]">
                Agregar Nuevo Alumno
                </button>
            </div>
            <div class="mt-5 mx-20 overflow-auto h-250 border-separate border border-gray-300 bg-gray-200 rounded-t-lg items-center">
                <table class="w-full table-auto bg-gray-200 rounded-t-lg">
                    <thead class="text-center text-white bg-sge">
                        <tr>
                            <th class="p-2">Matricula</th>
                            <th class="p-2">Nombre</th>
                            <th class="p-2">Grupo</th>
                            <th class="p-2">Asesor</th>
                            <th class="p-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-center bg-white">
                        @foreach(range(1, 10) as $index)
                            <tr class= 'border border-gray-200'>
                                <td>Matricula {{ $index }}</td>
                                <td>Nombre {{ $index }}</td>
                                <td>Grupo</td>
                                <td>Asesor</td>
                                <td class="pt-2 flex justify-center space-x-10">
                                    <button
                                        type="button"
                                        class="  px-4 py-2"
                                    >
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAcBJREFUSEvt1MtKw0AYBeAzSdulNxRBQcWNiODCrS7E8TmkahsVmlYU9wW3pa1RRB3qwocQoQ2l9YZrH0BdiA/gxkrsSLxQNZem6YiCZpvM/3HOzITghx7yQy6Ewko23/cUkEguRm/qBRIGz2rlrgCMC4BLsoHxnRV664YLgefTRx1SMHgCjuE37KYeLgSOaoUcQOa+JLyWDUw4JRcChzPFtqBc1QGMfcI5X2WJ6bRd5b7hpe3jdsOoqEyl6yCEW3CODZagy0777At+RR+PAYwA/ICpNGziqnbY8kBCJXByyeJ0RujhUlLFTh56qXW0NpjvM5VGTFzZzbf23J3eJ5PJqjDYRBGqnnBgyDq0lrzeHTbfe67aHTVHfQMcyRa6JYmU7JM2jnpK/ILK5IxzDDpUyJg6tWDur5eK379xrXoxrfdWgyi7onGqNALWhU30KYBTAP0Og7dYnKp+UMeqvxt1hKOafgVgwDYNR4Yl6IrfpK5VRzXd/qAQpJhK15pF3RJbYYGod1gw6ghHNvOT73XKhFR2Y9PnIur9OMPzL/MfbrYB26odr5NPjcWpxfldsLKhJ32Gs122l6CWeX/vVD8DNwKwH24kwnEAAAAASUVORK5CYII="/> 
                                    </button>
                                    <button
                                        type="button"
                                        class=" px-4 py-2"
                                    >
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlj1Ow0AQhd8saaigiSM6joA4QGK8zgkgEgUIboCE6DE1BRwhCBokOEG8xrkA4gh0KI4ikYom2kFrCUggif8ihcLb7r75Zp531kNY0qIlcZEazK3WSn8wOGMhVqclS1p/VOv1S/I8naaY1OBIymsAJ/OCMvNVLQhOFwaOpDwC0E4TEMC+pdR90tmJivuuazPzU5Iozz4R7VR9P/zS/g/wm21vikrlOE9FSRo9GrU3wvB1asXj4qjZ3CLm9aSAcy8b0bvV6bxM7YJZwshxQhA1ioDB3LWCwC7BxoGZD8hvq5noIhZobf/5BMxdFiJuFWI+/7Z2EVZbSsVJ9lzXmwgOwCRV833P7EdScgkudKtLq8ftKy9X2U6F2slMECYAM5v/tRmFxtcNEcWj0cQEs4gnM9fvMRdYygcAu7mAP6JHS6m9TFb3pDwg4LYImIHDmlJ3mcDmcN9xtiFEQwNrWRIQwBBad6tB8DxLl3qgzwJOc3Zp4E8+h0kuW0jNVgAAAABJRU5ErkJggg=="/> 
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304959</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jorge Negrete</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Edificio H</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SM51</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center flex justify-center">
                                    <button class="text-blue-700 hover:text-blue-700 mx-10">
                                        Editar
                                    </button>
                                    <button class="text-red-600 hover:text-red-700 mx-">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304960</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Maria Felix</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Edificio H</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SM53</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center flex justify-center">
                                    <button class="text-blue-700 hover:text-blue-700 mx-10">
                                        Editar
                                    </button>
                                    <button class="text-red-600 hover:text-red-700 mx-">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304961</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dolores del Rio</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Edificio H</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SM54</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center flex justify-center">
                                    <button class="text-blue-700 hover:text-blue-700 mx-10">
                                        Editar
                                    </button>
                                    <button class="text-red-600 hover:text-red-700 mx-">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304962</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Cantinflas</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Edificio M</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">DNM2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center flex justify-center">
                                    <button class="text-blue-700 hover:text-blue-700 mx-10">
                                        Editar
                                    </button>
                                    <button class="text-red-600 hover:text-red-700 mx-">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304963</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Gael Garcia</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Edificio G</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">DG32</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center flex justify-center">
                                    <button class="text-blue-700 hover:text-blue-700 mx-10">
                                        Editar
                                    </button>
                                    <button class="text-red-600 hover:text-red-700 mx-">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304964</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Salma Hayek</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Edificio K</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">DT67</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center flex justify-center">
                                    <button class="text-blue-700 hover:text-blue-700 mx-10">
                                        Editar
                                    </button>
                                    <button class="text-red-600 hover:text-red-700 mx-">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304965</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Vicente Fernandez</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Edificio H</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SM52</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center flex justify-center">
                                    <button class="text-blue-700 hover:text-blue-700 mx-10">
                                        Editar
                                    </button>
                                    <button class="text-red-600 hover:text-red-700 mx-">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304966</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Diego Luna</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Edificio J</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SM54</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center flex justify-center">
                                    <button class="text-blue-700 hover:text-blue-700 mx-10">
                                        Editar
                                    </button>
                                    <button class="text-red-600 hover:text-red-700 mx-">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304967</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Alfonso Cuaron</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Edificio K</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">DFT60</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center flex justify-center">
                                    <button class="text-blue-700 hover:text-blue-700 mx-10">
                                        Editar
                                    </button>
                                    <button class="text-red-600 hover:text-red-700 mx-">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
@endsection