@vite('resources/css/app.css')
@extends('plantilla')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Perfil - Universidad XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/boxicons/2.1.0/css/boxicons.min.css" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<main class="p-8">
        {{-- Titulo --}}
        <div class="border-b border-zinc-400 px-5 py-3 font-bold text-2xl mx-5">
Editar Perfil        </div>
      <br>
      <br>
    <div class="flex justify-center items-center h-100">
        <div class="max-w-5xl w-full bg-white  p-8 rounded-lg shadow-md flex space-x-8">
            <!-- Card para cambiar la foto de perfil -->
            <div class="w-5/6">
                <div class="text-center max-w-md bg-white p-8 rounded-lg shadow-md">
                    <h1 class="mb-2 text-2xl font-semibold text-gray-800">Cambiar Foto de Perfil</h1>
                    <div class="relative inline-block">
                        <div class="h-64 w-64 flex items-center justify-center mx-auto mb-2 rounded-full overflow-hidden bg-gray-200">
                            <img id="profile-image" class="h-full w-full object-cover" src="https://via.placeholder.com/150" alt="Profile Picture">
                        </div>
                        <br>
                        <input type="file" id="profile-picture" name="profile-picture" class="hidden" onchange="previewImage(event)">
                        <button type="button" onclick="document.getElementById('profile-picture').click()" class="mt-2 w-full flex items-center justify-center bg-sge hover:bg-[#1e3349] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAA5JJREFUSEvFlluop2MUxn+PiUhEUkNhxqhB5BhGzkNoJIfRyDFFBlFyQZgbhzB3JJm4kMMUkpGSC+SQZpBDLihn5VzOCoXH+0zvx////b/vv7/ZN3vVbu/9vYdnrfWu51lLzJFpjnDZJGDb84AlwG7AztXpr4DPgPWS/hkayCBg2/sCVwFnAtv3XP498Bhwt6T3ZnJgKrDt+cD9wLKZLmqtPwFcLum7vnO9wLb3AF4AdqmH/waeAt4C3qw/fwELgYOBE4AzgM3q/k+BpZLye8I6gW3nDXP5DvXEh8AKSW9Pi9z2XsAa4Mi671vgIElfts9NANveCngd2Kduvhe4WtIfQ9JtOxGvBq6p+5OhwyX9OXq+C/gu4Mq6aZWkW4YAtvcUBtwM3Fi/r5Z0bS9wTXHSujmwTtLpswHNGdsJ6hngJCDZWiApqd9oYxHbvge4DAgfF0kKP2dttheX2ni/4txRnuu6CeDqYTzaEVgr6dyO9N0J7NfhyQ/ABZJ+6zjzNHBKWf9E0qIu4ENLWjbUhfMkPdJxySvAEa3vPxfaHSXp3a7U2L4iolLXFkv6YCzVti8s7/BA3ZD3+HwAcCI8RlKo12m2D6zUzPqpkpKB/9/Y9g1AKtjAFpIiDmNmux1xgI+T9MYU4Kjf13V9paTwfAx4VVGdmyrwPElxoA38UtIK/AJsWxd/BY6XFO5PWJXdqcCXAhGL2PzR0m9us/1yaQR7J8r6e211vjdy2/sDjeKdJimyOxbxyZV3+b5MUjjYjvjRiEKp+HA9XD07DJgGbvti4L560QGS3mkDRyp/yvumIxV9vaQDeMu2dNo+p3D+IeD3NApJ60fP2X629OoTgW/Sw5snbAtIokzk0dWFkpq36audjd9tr8gwIOm1FuhomtdIWtmst4GXFp4+VxcflnT+VMQpi7VZvFg7VQp1z4bDY6keKaCk6rD6//WSbpsNuO3bS/qbxvBg6cvRif+sqzvtXhp4+NrMVLcC6VIT9OpyyPY2ZTyKtF5U1z/OoCAp9dMPXN8sDT2cjW7Hni/FEfJ/NC1628dW9du17ktBLelqNtNGn0T8ZKHYIfWSKNm6SrnwMiPN1lVQIipHV243vr0KnNVXoDMNe6FWpDTtLH8PsTAiQ0Da4ITsdlZ13622F1QHlgPb9ez7EXg8oJK+mMnDQXP1SMU3A30c2anqeriegWGDpEyig2yTgAfdOHDTnAH/C7HyRC5klEn9AAAAAElFTkSuQmCC" class="w-6 h-6 mr-2" alt="Icono de subir imagen">
                            Subir Imagen
                        </button>                        
                    </div>
                </div>
            </div>
            <!-- Card para recuperar contraseña -->
            <div class="w-5/6">
                <div class="max-w-md bg-white p-8 rounded-lg shadow-md">
                    <form class="space-y-4">
                        <div class="rounded-md shadow-sm -space-y-px">
                            <div class="text-center">
                                <h1 class="mb-4 text-2xl font-semibold text-gray-800">Recuperar contraseña</h1>
                            </div>
                            <div>
                                <label for="new-password" class="block text-sm font-medium text-gray-700">Nueva Contraseña</label>
                                <input id="new-password" name="new-password" type="password" required class="mt-1 block w-full py-2 px-4 border border-gray-300 bg-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            <div>
                                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirmar Contraseña</label>
                                <input id="confirm-password" name="confirm-password" type="password" required class="mt-1 block w-full py-2 px-4 border border-gray-300 bg-gray-100 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                        <div class="bg-yellow-100 rounded-md p-4">
                            <h1 class="text-yellow-800 mb-2">Recuperación de Contraseña</h1>
                            <p class="text-sm text-yellow-700">El campo de recuperación de contraseña es opcional. Si lo completas, se enviará un enlace de recuperación a tu dirección de correo electrónico.</p>
                        </div>
                        <div>
                            <button type="submit" class="w-full flex justify-center bg-sge hover:bg-[#1e3349] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                <i class='bx bx-save'></i> Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Función para mostrar la imagen seleccionada en la vista previa
        function previewImage(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-image').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    </script>

</body>

</html>
@endsection 