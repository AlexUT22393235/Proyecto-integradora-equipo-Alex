@extends('PlantillaPresidente')

@section('content')
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Asesores y estudiantes</title>
</head>

<body >
<div class="p-8">
    <div class="font-bold text-black border-b border-zinc-400 px-5 py-3 text-2xl mx-5">
        Estudiantes del Asesor
    </div>
    <div style="margin-left: 2cm; margin-right: 2cm;" class="mt-12">
        <div class="">
        <div class="flex mt-5">
    <select style="margin-left: 90px;" id="asesor-dropdown" class="w-64 rounded-md mr-2 shadow-sm border-grey-700">
        <option selected> Elige el Asesor</option>
        @foreach($listaAsesores as $asesor)
            <option value="{{$asesor->id_usuario}}">{{$asesor->nombres}}</option>
        @endforeach
    </select>

    <button type="button" class="text-white px-4 py-2 rounded-xl shadow-lg bg-[#325b87]">
        Buscar
    </button>
</div>

<!-- Agrega este script al final de tu archivo, antes de cerrar </body> -->
<script>
    $(document).ready(function () {
        $('#asesor-dropdown').select2({
            placeholder: 'Seleccionar Asesor',
            allowClear: true
        });
    });
</script>
            <div class="mt-5 mx-20 overflow-auto h-250 border-separate border border-gray-300 bg-gray-200 rounded-t-lg items-center">
                <table class="w-full table-auto bg-gray-200 rounded-t-lg">
                    <thead class="text-center text-white bg-[#325b87]">
                        <tr>
                                <th class="p-2">Matricula</th>
                                <th class="p-2">Nombres</th>
                                <th class="p-2">Apellidos</th>
                                <th class="p-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-center bg-white">
                        @foreach($listaEstudiantes as $index)
                            <tr>
                                <td> {{ $index->matricula }}</td>
                                <td>{{ $index->nombres }}</td>
                                <td>{{$index->apellidos}}</td>
                                <td class="pt-2 flex justify-center space-x-10">
                                    <button
                                    type="button"
                                    class="text-white px-4 py-2 rounded-full"
                                >
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAcBJREFUSEvt1MtKw0AYBeAzSdulNxRBQcWNiODCrS7E8TmkahsVmlYU9wW3pa1RRB3qwocQoQ2l9YZrH0BdiA/gxkrsSLxQNZem6YiCZpvM/3HOzITghx7yQy6Ewko23/cUkEguRm/qBRIGz2rlrgCMC4BLsoHxnRV664YLgefTRx1SMHgCjuE37KYeLgSOaoUcQOa+JLyWDUw4JRcChzPFtqBc1QGMfcI5X2WJ6bRd5b7hpe3jdsOoqEyl6yCEW3CODZagy0777At+RR+PAYwA/ICpNGziqnbY8kBCJXByyeJ0RujhUlLFTh56qXW0NpjvM5VGTFzZzbf23J3eJ5PJqjDYRBGqnnBgyDq0lrzeHTbfe67aHTVHfQMcyRa6JYmU7JM2jnpK/ILK5IxzDDpUyJg6tWDur5eK379xrXoxrfdWgyi7onGqNALWhU30KYBTAP0Og7dYnKp+UMeqvxt1hKOafgVgwDYNR4Yl6IrfpK5VRzXd/qAQpJhK15pF3RJbYYGod1gw6ghHNvOT73XKhFR2Y9PnIur9OMPzL/MfbrYB26odr5NPjcWpxfldsLKhJ32Gs122l6CWeX/vVD8DNwKwH24kwnEAAAAASUVORK5CYII="/>
                            </button>
                                    <button
                                        type="button"
                                        class="text-white px-4 py-2 rounded-full"
                                    >
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAXpJREFUSEvtlj1Ow0AQhd8saaigiSM6joA4QGK8zgkgEgUIboCE6DE1BRwhCBokOEG8xrkA4gh0KI4ikYom2kFrCUggif8ihcLb7r75Zp531kNY0qIlcZEazK3WSn8wOGMhVqclS1p/VOv1S/I8naaY1OBIymsAJ/OCMvNVLQhOFwaOpDwC0E4TEMC+pdR90tmJivuuazPzU5Iozz4R7VR9P/zS/g/wm21vikrlOE9FSRo9GrU3wvB1asXj4qjZ3CLm9aSAcy8b0bvV6bxM7YJZwshxQhA1ioDB3LWCwC7BxoGZD8hvq5noIhZobf/5BMxdFiJuFWI+/7Z2EVZbSsVJ9lzXmwgOwCRV833P7EdScgkudKtLq8ftKy9X2U6F2slMECYAM5v/tRmFxtcNEcWj0cQEs4gnM9fvMRdYygcAu7mAP6JHS6m9TFb3pDwg4LYImIHDmlJ3mcDmcN9xtiFEQwNrWRIQwBBad6tB8DxLl3qgzwJOc3Zp4E8+h0kuW0jNVgAAAABJRU5ErkJggg=="/>
                                </button>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

    </body>
    </html>
@endsection
