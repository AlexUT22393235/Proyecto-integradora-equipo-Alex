@extends('plantillaAsesor')

@section('content')

    <body className="max-w-sm rounded overflow-hidden shadow-md  m-10">


        <div class="container mx-auto">

            <div class="text-zinc-400 border-b border-zinc-400 px-5 py-3 text-xl mx-5">             Calendario           </div>


            <div class="flex p-4">
                <!-- Card "Mis tareas" -->
               
                <div class="bg-white max-w-sm rounded-xl overflow-hidden ml-6 shadow-lg w-[30%]">
                    <div class="px-10 py-5">
                        <div class="py-4">
                             <div class="font-bold text-xl mb-2 text-indigo-700">Actividades por revisar</div>
                             <div class="py-2">
                                <li class="p-2">Portada</li>
                        <li class="p-2">Objetivo general</li>
                             </div>
                        
                        </div>
                       

                        <div class="py-8">
                            <div class="font-bold text-xl mb-2 text-indigo-700">Citas</div>
                            <p class="p-2">
                                <span class="text-[#325B87]">Asesorado 1:</span>
                                <span class="text-[#63D9CD]">27/06/24</span>
                            </p>
                            <p class="p-2">
                                <span class="text-[#325B87]">Asesorado 2:</span>
                                <span class="text-[#e74c31]">07/06/24</span>
                            </p>
                            <p class="p-2">
                                <span class="text-[#325B87]">Asesorado 3:</span>
                                <span class="text-[#312ee7]">12/06/24</span>
                            </p>
    
                        </div>
                        </div>
                        
                </div>

                <!-- Sección del calendario -->
                <!-- Calendario -->
                <div class="w-[100%] bg-white rounded-xl shadow-md p-8 ml-14" style="max-height: 800px; overflow-y: auto;">
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-2xl font-light text-blue-700">Calendario</h1>
                        <h1 class="text-2xl font-light text-blue-700">Junio</h1>
                    </div>
                    <div class="grid grid-cols-7  text-center">
                        @foreach (['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'] as $dia)
                            <div class="font-semibold text-gray-700 border border-gray-200 py-2">{{ $dia }}</div>
                        @endforeach
                        <!-- Generación de los días del calendario -->
                        @for ($rowIndex = 0; $rowIndex < 6; $rowIndex++)
                            @for ($colIndex = 0; $colIndex < 7; $colIndex++)
                                @php
                                    $dayOfMonth = $rowIndex * 7 + $colIndex + 1;
                                    $dayToShow = $dayOfMonth <= 30 ? $dayOfMonth : $dayOfMonth - 30;
                                @endphp
                                <div class="border border-gray-200 py-8">
                                    <!-- Renderizar solo si el día está dentro del mes -->
                                    {{ $dayToShow }}
                                </div>
                            @endfor
                        @endfor
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <div class="font-bold cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg>
                        </div>
                        <div class="font-bold  cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24"
                                style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                            </svg>
                        </div>
                    </div>
                </div>


                <!-- Aquí puedes incluir la referencia a los scripts necesarios, por ejemplo, para Tailwind CSS y otros -->
    </body>

    </html>
@endsection