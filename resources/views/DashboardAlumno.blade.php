@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard Alumno</title>
</head>

<style>
  footer{
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #325B87; /* Color de fondo */
        text-align: left; /* Alineación del texto */
        color: white; /* Color del texto */
    }

</style>

<body>

  <main>
    <div class="w-full bg-[#325B87] flex flex-row p-3">
      <a href="/">
        <img src="https://github.com/AlexUT22393235/Proyecto-integradora-equipo-Alex/blob/integracion/public/images/logo.png?raw=true" alt="Logo" class="w-auto mr-20 h-9 max-w-32">
    </a>
        <div class="flex flex-row m-auto text-[#F8F8F8] gap-7 mr-4 inter-variacion ">
            <h3 class="m-auto div__ul-li">
                Gestión de estadias
            </h3>
            <h3 class="m-auto div__ul-li">
                Proyecto
            </h3>
            <h3 class="m-auto div__ul-li">
                Calendario
            </h3>
            <h3 class="m-auto div__ul-li">
                Documentos
            </h3>
            <img src='/user.png' class='h-[10%] w-[10%] items-center' alt="user" />
        </div>
        <div class="flex-item user-img"></div>
    </div>

    <div class="bg-blue-50 h-[87%]">
        <Title titulo="Sistema de Gestión de Estadías"></Title>
        <div class="flex flex-row h-full pt-4 pb-2 m-auto inter-variacion ">
            <div
                class="flex flex-col justify-between w-[17%] m-1 p-4 mx-4 mb-4 transition-transform duration-300 transform bg-white border-l-4 border-green-500 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                    Tareas próximas faltantes
                </h4>
                <p class="pb-3 text-lg " style="word-wrap: break-word;">
                    Corrección de objetivo principal
                    <input type="checkbox" />
                </p>
                <p class="pb-3 text-lg " style="word-wrap: break-word;">
                    Corrección de título
                    <input type="checkbox" />
                </p>
            </div>

            <div class="h-full w-[20%] m-1">
                <div
                    class="flex flex-col justify-between h-[47%] p-4 mx-4 mb-4 transition-transform duration-300 transform bg-white border-l-4 border-yellow-500 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                        Asesor Académico
                    </h4>
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">Rafael Villegas</p>
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">rvillegas@utcancun.edu.mx</p>
                </div>

                <div
                    class="flex flex-col justify-between h-[47%] p-4 mx-4 mb-4 transition-transform duration-300 transform bg-white border-l-4 border-red-500 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                        Calendario
                    </h4>
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">Citas próximas</p>
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">Tareas pendientes</p>
                </div>
            </div>

            <div
                class="flex flex-col justify-between w-[19%] m-1 p-4 mx-4 mb-4 transition-transform duration-300 transform bg-white border-l-4 border-blue-200 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                <img src='grafic.png' alt="Grafica" class=" h-[40%] w-[98%] p-3" />
                <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                    Avances del proyecto
                </h4>
                <p class="pb-3 text-lg " style="word-wrap: break-word;">Realizado </p>
                <p class="pb-3 text-lg " style="word-wrap: break-word;">Por complementar</p>
            </div>

            <div class="h-full w-[20%]  ">
                <div
                    class="flex flex-col justify-between h-[47%] p-4 mx-4 mb-4 transition-transform duration-300 transform bg-white border-l-4 border-purple-500 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                        Estatus del proyecto
                    </h4>
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">Comentarios</p>
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">Votos</p>
                </div>
                <div
                    class="flex flex-col justify-between h-[47%] p-4 mx-4 mb-4 transition-transform duration-300 transform bg-white border-l-4 border-orange-500 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                        Documentos
                    </h4>
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">Rafael Villegas</p>
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">rvillegas@utcancun.edu.mx</p>
                </div>
            </div>

            
            <div
                class="flex flex-col justify-between w-[17%] p-4 mx-4 mb-4 m-1 transition-transform duration-300 transform bg-white border-l-4 border-blue-500 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                <div class="mb-4">
                    <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                        Donación de libro
                    </h4>
                    <div class="relative mt-4 mb-4">
                        <label for="title" class="block mb-2 text-sm font-bold text-gray-700">
                            Título del Libro
                        </label>
                        <div class="border-2 border-blue-900 rounded-lg">
                            <input id="title" type="text" placeholder="Titulo del libro"
                                class="w-full px-4 py-2 text-gray-700 bg-transparent rounded-lg focus:outline-none">
                        </div>
                    </div>
                    <div class="relative mt-4 mb-4">
                        <label for="payment-doc" class="block mb-2 text-sm font-bold text-gray-700">
                            Documento de pago
                        </label>
                        <input id="payment-doc" type="text" placeholder="Documento de pago"
                            class="w-full px-4 py-2 text-gray-700 bg-transparent border-2 border-blue-900 rounded-lg focus:outline-none">
                    </div>
                    <div class="relative mt-4 mb-4">
                        <label for="isbn" class="block mt-6 mb-2 text-sm font-bold text-gray-700">
                            ISBN
                        </label>
                        <input id="isbn" type="text" placeholder="0-0000-0000-0"
                            class="w-full px-4 py-2 text-gray-700 bg-transparent border-2 border-blue-900 rounded-lg focus:outline-none">
                    </div>
                    <button type="button"
                        class="w-full px-2 py-2 mt-4 mb-4 font-bold text-white bg-blue-500 shadow-lg rounded-xl hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                        Donación Compartida
                    </button>
                    <button type="button"
                        class="w-full px-4 py-2 mt-4 mb-4 font-bold text-white bg-green-500 shadow-lg rounded-xl hover:bg-green-700 focus:outline-none focus:shadow-outline">
                        Listo
                    </button>
                </div>
            </div>

        </div>
    </div>
</main>
<footer>
    <div class='bg-[#325B87] w-full mb-0 h-10 '>
        <p class='text-[#F8F8F8] text-left ml-5 p-2 inter-variacion'>Copyright Universidad Tecnológica de Cancún ©
            2024</p>
    </div>
</footer>

</body>

</html>