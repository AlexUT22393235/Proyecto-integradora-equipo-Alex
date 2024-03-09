@extends('plantilla')

@section('content')
<body class="bg-blue-50">
    <h1 class="text-2xl text-gray-500 m-9 font-bold ">Bienvenido (Direccion)!</h1>
    <div>
        <div class="container mx-auto mt-20">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                <a href="/docsDireccion" class="border-l-4 border-blue-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Reportes</h3>
                        <img src="/reportes.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Reportes</p>
                    </div>
                </a>
                <a href="/librosAlumno" class="border-l-4 border-green-500 bg-white p-10 rounded-2xl shadow-md flex flex-col justify-between mx-4 mb-4 transition-transform duration-300 transform hover:scale-105 hover:shadow-md hover:bg-gray-50">
                    <div class="flex flex-col items-center justify-center mb-4">
                        <h3 class="text-blue-800 text-2xl font-semibold mb-4">Libros</h3>
                        <img src="/reportes.png" alt="Imagen de Proyecto" class=" h-20 object-cover mb-4">
                        <p class="text-gray-600 text-center">Reportes</p>
                    </div>
                </a>
               
                 
                </div>

                
                </div>
            </div>
        </div>
    </div>

</body>
@endsection