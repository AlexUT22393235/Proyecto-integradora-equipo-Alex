@extends('plantilla')

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
<div>

    <div style="margin-left: 2cm; margin-right: 2cm;">
        <div class="p-5">
            <div class="bg-white p-4 font-bold border-b border-black text-2xl">
               Lista de alumnos
            </div>

    <div class="flex flex-col mt-1 mx-auto max-w-7xl border border-gray-50 rounded-lg overflow-hidden p-0">
        <div class="my-1 overflow-x-auto sm:-mx-1 lg:-mx-1">
            <div class="py-1 align-middle inline-block min-w-full sm:px-1 lg:px-1">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-blue-800 text-white">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Matrícula
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Edificio
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Grupo
                                </th>
                                <th scope="col" class="px-9 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304958</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pedro Infante</td>
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
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">22304959</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Jorge Negrete</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Edificio H</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">SM51</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-center flex justify-center">
                                    <button class="text-blue-700 hover:text-blue-700 mx-10">
                                        Editar
                                    </button>
                                    <button class="text-red-600 hover:text-red-700">
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
</div>
</body>

</html>
@endsection