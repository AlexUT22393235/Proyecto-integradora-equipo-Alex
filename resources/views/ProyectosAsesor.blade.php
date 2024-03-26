@extends('PlantillaAdmin')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        @vite('resources/css/app.css')
        <style>
            footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #325B87;
                /* Color de fondo */
                text-align: left;
                /* Alineación del texto */
                color: white;
                /* Color del texto */
            }

            .accion-icono {
                text-align: center;
                color: #325B87;
            }

            .estado-aprobado,
            .estado-proceso {
                display: inline-block;
                /* Para que el span se comporte como un bloque en línea */
                height: 30px;
                width: 100px;
                /* Altura deseada */
                line-height: 30px;
                /* Centra verticalmente el texto */
                text-align: center;
                /* Centra horizontalmente el texto */
                border-radius: 10px;
                padding: 0 5px;
                /* Espaciado interno */
            }

            .estado-aprobado {
                color: #1a416e;
                /* Color de texto aprobado */
                background-color: #b2d7fa;
                /* Fondo aprobado */
            }

            .estado-proceso {
                color: #3e92c2;
                background-color: #e6f2fc;
            }
        </style>
        <title>Proyectos - Asesor</title>
    </head>

    <body>
<div class="p-8">
        <div class="px-5 py-3 mx-5 text-2xl font-bold text-black border-b border-zinc-400">             Proyectos           </div>


        <div
            class="items-center mx-20 mt-8 overflow-auto bg-gray-200 border border-separate border-gray-300 rounded-t-lg h-250">
            <table class="w-full bg-gray-200 rounded-t-lg table-auto">
                <thead class="text-center text-white bg-[#325b87]">
                    <tr>
                        <th class="p-2">Nombre del proyecto</th>
                        <th class="p-2">Estudiante</th>
                        {{-- <th class="p-2">Estatus</th>
                        <th class="p-2">Votos</th> --}}
                        <th class="p-2">Accion</th>

                    </tr>
                </thead>
                <tbody class="text-center bg-white">
                    dd($proyectos)
                    @foreach ($proyectos as $item)
                    <tr class= 'border border-gray-200'>
                        <td>{{$item->titulo}}</td>
                        <td>{{$item->nombres}}</td>
                        <td class="flex justify-center pt-2 space-x-10">
                            <button type="button" class="px-4 py-2 rounded-full focus:outline-none focus:ring-4">
                                <i class="accion-icono fas fa-eye"></i> </button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>

    </html>
@endsection