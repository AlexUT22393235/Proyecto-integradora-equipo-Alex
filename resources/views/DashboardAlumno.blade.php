@extends('plantillaAlumno')
@vite('resources/css/app.css')


@section( 'content')

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
    <div class="bg-blue-50 h-full items-center flex flex-row">
        <div class="flex flex-row h-full pb-24 pt-10 w-full mx-20 inter-variacion">
            <div class="h-auto w-[100%] m-1">
                <a href="/project_details">
                <div
                    class="flex flex-col justify-between h-[50%] p-4 mx-4 mb-4 transition-transform duration-300 transform bg-white border-l-4 border-yellow-500 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <h1 class="text-blue-800 text-2xl font-semibold mb-4"> Estado del Proyecto</h1>
                    
                <div class="top-1 mt-0 flex">
                    <img src="grafic.png" class="w-[30%]"/>
                    <div class=" ml-10 text-left">
                        <div class="flex gap-4">
                            <div class="bg-green-500 rounded-lg h-8 w-8"></div> 
                            <p class="pb-3 text-lg" style="word-wrap: break-word;">
                                Aprobado
                            </p>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="bg-yellow-500 rounded-lg h-8 w-8"></div> 
                            <p class="pb-3 text-lg" style="word-wrap: break-word;">
                                Pendiente
                            </p>
                        </div>
                        <div class="flex gap-4">
                            <div class="bg-red-500 rounded-lg h-8 w-8"></div> 
                            <p class="pb-3 text-lg" style="word-wrap: break-word;">
                                No aprobado
                            </p>
                        </div>
                    </div>
                    
                </div>
                </div>
                </a>

                <div class="flex justify-between items-center p-4 mx-4 h-[47%] transition-transform duration-300 transform bg-white border-l-4 border-red-500 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col justify-between w-2/3">
                        <h1 class="text-blue-800 text-2xl font-semibold mb-4">Asesor Académico</h1>
                        <div class="pb-3 text-lg text-[#010D82]" style="word-wrap: break-word;">
                            Correo:
                            <a class="text-black" href="mailto:rvillegas@utcancun.edu.mx">rvillegas@utcancun.edu.mx</a>
                        </div>
                        <div class="pb-3 text-lg text-[#010D82]" style="word-wrap: break-word;">
                            Nombre:
                            <a class="text-black">Rafael Villegas</a>
                        </div>
                    </div>
                    <img src="/asesor.png" alt="Imagen de Proyecto" class="w-1/3 h-auto object-cover mb-4">
                </div>
                
                
            </div>
            <div class="h-auto w-[100%] m-1">
                <a href="/alumnoDocs">
                <div
                    class="flex flex-col justify-between h-[50%] p-4 mx-4 mb-4 transition-transform duration-300 transform bg-white border-l-4 border-blue-500 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <h1 class="text-blue-800 text-2xl font-semibold mb-4">Documentos Pendientes:</h1>
                <h4 class="text-[#010D82] pb-2 text-xl -mt-20  montserrat-alternates-regular-italic">
                    Cartas faltantes:
                </h4>
                <div class="top-1 -mt-20 ">
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">
                       Carta 1
                        <input type="checkbox" />
                    </p>
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">
                        Carta 2
                        <input type="checkbox" />
                    </p>
                </div>
            </br>
                
                </div>
            </a>
            <a href="/CalendarioAlum">
                <div
                    class="flex flex-col justify-between p-4 mx-4 h-[47%] transition-transform duration-300 transform bg-white border-l-4 border-green-500 shadow-md rounded-2xl hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <h1 class="text-blue-800 text-2xl font-semibold mb-4"> Calendario </h1>
                <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                    Mis pendientes
                </h4>
                <div class="top-1 mt-0 ">
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">
                       Corregir título de ante-proyecto
                        <input type="checkbox" />
                    </p>
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">
                        Corrección de objetivo general
                        <input type="checkbox" />
                    </p>
                </div>
            
                <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                    Mis próximas citas
                </h4>
                <div class="top-1 mt-0 ">
                    <p class="pb-3 text-lg " style="word-wrap: break-word;">
                       Cita on-line con asesor Rafael Villegas <a class="underline decoration-sky-500 font-bold">14/04/24</a>
                    </p>
                </div>
                </div>
            </a>
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
@endsection