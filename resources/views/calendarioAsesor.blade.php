@extends('plantillaAsesor')

@section('content')

    <body className="max-w-sm rounded overflow-hidden shadow-md  m-10">


        <div class="container mx-auto ">

            <div class="text-black font-bold border-b border-zinc-400 px-5 py-3 text-xl mx-5">Calendario</div>


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
                       

                        <div class="py-5">
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
                 
                <div id="calendar" style="width: 100%; background-color: #fff; border-radius: 0.75rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); padding: 2rem; margin-left: 3.5rem; max-height: 745px; overflow-y: auto;">

                
    <!-- Contenido del calendario aquí -->
</div>
                <!-- Aquí puedes incluir la referencia a los scripts necesarios, por ejemplo, para Tailwind CSS y otros -->
    </body>

    </html>
@endsection
