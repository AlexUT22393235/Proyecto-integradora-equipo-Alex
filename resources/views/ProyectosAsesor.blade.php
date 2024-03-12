@extends('plantillaAsesor')

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
                color: #00CD08;
                /* Color de texto aprobado */
                background-color: #E5FEE7;
                /* Fondo aprobado */
            }

            .estado-proceso {
                color: #CD6200;
                background-color: #FEF2E5;
            }
        </style>
        <title>Document</title>
    </head>

    <body>

        <div class="text-zinc-400 border-b border-zinc-400 px-5 py-3 text-xl mx-5">             Vista de Proyectos           </div>


        <div
            class="mt-5 mx-20 overflow-auto h-250 border-separate border border-gray-300 bg-gray-200 rounded-t-lg items-center">
            <table class="w-full table-auto bg-gray-200 rounded-t-lg">
                <thead class="text-center text-white bg-[#325b87]">
                    <tr>
                        <th class="p-2">Nombre del proyecto</th>
                        <th class="p-2">Estudiante</th>
                        <th class="p-2">Estatus</th>
                        <th class="p-2">Votos</th>
                        <th class="p-2">Accion</th>

                    </tr>
                </thead>
                <tbody class="text-center bg-white">

                    <tr class= 'border border-gray-200'>
                        <td>Proyecto 1</td>
                        <td>Estudiante 1 </td>
                        <td><span class="estado-aprobado">Aprobado</span></td>
                        <td>3</td>

                        <td class="pt-2 flex justify-center space-x-10">
                            <button type="button" class="  px-4 py-2 rounded-full focus:outline-none focus:ring-4 ">
                                <i class="accion-icono fas fa-eye"></i> </button>

                        </td>


                    </tr>

                    <tr class= 'border border-gray-200'>
                        <td>Proyecto 2</td>
                        <td>Estudiante 2 </td>
                        <td><span class="estado-proceso">Proceso</span></td>
                        <td>2</td>

                        <td class="pt-2 flex justify-center space-x-10">
                            <button type="button" class="  px-4 py-2 rounded-full focus:outline-none focus:ring-4 ">
                                <i class="accion-icono fas fa-eye"></i> </button>


                        </td>


                    </tr>

                    <tr class= 'border border-gray-200'>
                        <td>Proyecto 3</td>
                        <td>Estudiante 3 </td>
                        <td><span class="estado-proceso">Proceso</span></td>
                        <td>0</td>

                        <td class="pt-2 flex justify-center space-x-10">
                            <button type="button" class="  px-4 py-2 rounded-full focus:outline-none focus:ring-4 ">
                                <i class="accion-icono fas fa-eye"></i>
                            </button>

                        </td>


                    </tr>

                    <tr class= 'border border-gray-200'>
                        <td>Proyecto 4</td>
                        <td>Estudiante 4 </td>
                        <td><span class="estado-proceso">Proceso</span></td>
                        <td>0</td>

                        <td class="pt-2 flex justify-center space-x-10">
                            <button type="button" class="  px-4 py-2 rounded-full focus:outline-none focus:ring-4 ">
                                <i class="accion-icono fas fa-eye"></i> </button>

                        </td>


                    </tr>

                    <tr class= 'border border-gray-200'>
                        <td>Proyecto 5</td>
                        <td>Estudiante 5 </td>
                        <td><span class="estado-proceso">Proceso</span></td>
                        <td>0</td>

                        <td class="pt-2 flex justify-center space-x-10">
                            <button type="button" class="  px-4 py-2 rounded-full focus:outline-none focus:ring-4 ">
                                <i class="accion-icono fas fa-eye"></i> </button>

                        </td>


                    </tr>

                </tbody>
            </table>
        </div>

    </body>

    </html>
@endsection