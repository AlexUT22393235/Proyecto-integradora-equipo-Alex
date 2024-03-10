@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>

    <main>
        <div class="bg-[#7ea3ca] py-8">
            <h1 class="text-3xl font-bold text-center text-white">Editar Perfil</h1>
        </div>

        <br>

        <div class="max-w-md m-auto w-full bg-white p-8 rounded-lg shadow-md">
            <div class="flex justify-center">
                <img class="h-24 w-24 rounded-full object-cover" src="https://via.placeholder.com/150" alt="Profile Picture">
            </div>
            <div class="mt-4">
                <label for="profile-picture" class="block text-sm font-medium text-gray-700">Cambiar foto de perfil</label>
                <input type="file" id="profile-picture" name="profile-picture" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>

        <div class="max-w-md mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="inline-full-name">
                        Nueva Contraseña
                    </label>
                    <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-full-name" type="password" placeholder="******************" >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="inline-password">
                        Confirmar Contraseña
                    </label>
                    <input class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-black leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="inline-password" type="password" placeholder="******************">
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>
@endsection