@extends('plantillaAsesor')

@section('content')
<body className="max-w-sm rounded overflow-hidden shadow-md  m-10">
  
        
    <div class="container mx-auto">
       
            <h1 class='text-2xl py-5 px-10 font-bold '>Calendario</h1>
    

        <div class="flex p-4">
            <!-- Card "Mis tareas" -->
            <div class="max-w-sm rounded overflow-hidden shadow-md m-4 ml-16">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-indigo-700">Mis tareas</div>
                    <p>
                        <span class="text-[#325B87]">Fecha de entrega:</span>
                        <span class="text-[#63D9CD]">27/06/24</span>
                      </p>
                    <div class="mb-2">
                        <label class="flex items-center space-x-2">
                            <span class="text-black">Corrección de objetivo principal</span>
                            <input type="checkbox" class="form-checkbox h-5 w-5" />
                        </label>
                        <label class="flex items-center space-x-2">
                            <span class="text-black">Corrección de título</span>
                            <input type="checkbox" class="form-checkbox h-5 w-5 " />

                        </label>
                    </div>
                </div>
            </div>

            <!-- Sección del calendario -->
            <!-- Calendario -->
            <div class="w-8/12 bg-white rounded-xl shadow-md p-8 ml-14">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-2xl font-light text-blue-700">Calendario</h1>
                    <h1 class="text-2xl font-light text-blue-700">Junio</h1>
                </div>
                <div class="grid grid-cols-7  text-center">
                    @foreach(['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'] as $dia)
                        <div class="font-semibold text-gray-700 border border-gray-200 py-2">{{ $dia }}</div>
                    @endforeach
                    <!-- Generación de los días del calendario -->
                    @for($rowIndex = 0; $rowIndex < 6; $rowIndex++)
                        @for($colIndex = 0; $colIndex < 7; $colIndex++)
                            @php
                                $dayOfMonth = $rowIndex * 7 + $colIndex + 1;
                                $dayToShow = $dayOfMonth <= 30 ? $dayOfMonth : $dayOfMonth - 30;
                            @endphp
                            <div class="border border-gray-200 py-2">
                                <!-- Renderizar solo si el día está dentro del mes -->
                                {{ $dayToShow }}
                            </div>
                        @endfor
                    @endfor
                </div>
                <div class="flex justify-between items-center mt-4">
                    <h1 class="text-base font-bold text-blue-700 cursor-pointer">Anterior</h1>
                    <h1 class="text-base font-bold text-blue-700 cursor-pointer">Siguiente</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Aquí puedes incluir la referencia a los scripts necesarios, por ejemplo, para Tailwind CSS y otros -->
</body>
</html>
@endsection