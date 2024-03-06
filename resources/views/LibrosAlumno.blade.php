@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Biblioteca</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/src/output.css') }}">
</head>

<style>
    .king{
        background-color: #325B87;
    }
</style>

<body class="gap-0 h-full">
    
    <section class="h-full">
        <div class="p-5">
            <hr class="border-2">

            <div class="flex flex-col lg:flex-row justify-between px-4 py-4 w-full">
                <div class="relative">
                    <button type="button" class="king p-2 px-4 mb-6 rounded-full text-white">Modificar</button>
                </div>
            </div>
            <div class="px-2">
                <!-- component -->
                <div class="flex items-center justify-center">
                    <div class="overflow-x-auto">
                        <table class="bg-white shadow-md rounded-xl">
                            <thead>
                                <tr class="bg-blue-gray-100 text-gray-700 mb-6 leading-6">
                                    <th class="py-3 px-4 text-left">Matrícula</th>
                                    <th class="py-3 px-4 text-left">Título</th>
                                    <th class="py-3 px-4 text-left">Autor</th>
                                </tr>
                            </thead>
                            <tbody class="text-blue-gray-900">
                                <tr class="py-5 leading-10">
                                    <td class="py-3 px-4">21394165</td>
                                    <td class="py-3 px-4">Inteligencia artificial: Un enfoque moderno</td>
                                    <td class="py-3 px-4 font-semibold">Stuart Russell y Peter Norvig</td>
                                </tr>
                                <tr class="leading-10">
                                    <td class="py-3 px-4">21789633</td>
                                    <td class="py-3 px-4">Refactorización: mejorar el diseño del código existente</td>
                                    <td class="py-3 px-4 font-semibold">Martin Fowler</td>
                                </tr>
                                <tr class="mb-6 leading-10">
                                    <td class="py-3 px-4">21458693</td>
                                    <td class="py-3 px-4">Mapeo de historias de usuario</td>
                                    <td class="py-3 px-4 font-semibold">Jeff Patton</td>
                                </tr>
                                <tr class="leading-10">
                                    <td class="py-3 px-4">21954529</td>
                                    <td class="py-3 px-4">El programador pragmático</td>
                                    <td class="py-3 px-4 font-semibold">Andrew Hunt y David Thomas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
@endsection