@extends('plantillaAsesor')

@section('content')

    <body className="max-w-sm rounded overflow-hidden shadow-md  m-10">


        <div class="container mx-auto ">

            <div class="text-black font-bold border-b border-zinc-400 px-5 py-3 text-xl mx-5">Calendario</div>

            <!-- <div class="flex mt-5 justify-end">
            <button id="open-modal-btn"
                type="button"
                class="block mx-20 bg-sge text-white px-4 py-2 rounded-md hover:bg-[#1e3349] focus:outline-none focus:bg-[#1e3349]"
            >
            Agregar actividad
            </button>
        </div> -->


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
                 
                <div id="calendar" style="width: 100%; background-color: #fff; border-radius: 0.75rem; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); padding: 2rem; margin-left: 3.5rem; margin-right:20px; margin-bottom:20px; max-height: 600px; ;">

                
    <!-- Contenido del calendario aquí -->
</div>

<div id="modal" class="fixed inset-0 flex items-center justify-center z-10 hiddend">
        <div class="absolute inset-0 bg-black opacity-75 modal-overlay" onclick="closeModal()"></div>
        <div class="bg-white p-8 rounded-lg z-20 modal-container w-96"> <!-- Ajuste del ancho del modal -->
            <span id="close-modal-btn" class="close absolute top-0 right-0 p-4">&times;</span>
            <h2 class="text-lg font-bold mb-4">Nueva actividad</h2>
            <form method="POST" action="{{url('calendario')}}" class="mt-5 p-5 border border-gray-200 rounded-lg bg-gray-100">
                @csrf <!-- Agrega esto para proteger contra CSRF -->
                
                <div class="mb-4">
                    <label for="nomina" class="block text-sm font-medium text-gray-700">Nombre de actividad:</label>
                    <input type="text" id="titulo" name="titulo" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>
                
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Actividad:</label>
                    <input type="text" id="tarea" name="tarea" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>

                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Fecha de incio: </label>
                    <input type="date" id="fecha_inicial" name="fecha_inicial" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>

               
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Fecha de final: </label>
                    <input type="date" id="fecha_final" name="fecha_final" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required>
                </div>
                <div class="flex justify-end mt-3">
                    <button type="submit" class="px-4 py-2 bg-sge text-white rounded-lg">Guardar</button>
                    <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg ml-4" onclick="closeModal()">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
    
    
    <!-- JavaScript para controlar el modal -->
    <script>
        // Función para abrir el modal
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        // Función para cerrar el modal
        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }

        // Evento para abrir el modal cuando se hace clic en el botón "Agregar nuevo Directivo"
        document.getElementById('open-modal-btn').addEventListener('click', openModal);

        // Evento para cerrar el modal cuando se hace clic en el botón de cierre
        document.getElementById('close-modal-btn').addEventListener('click', closeModal);

        // Evento para cerrar el modal cuando se hace clic en el botón "Cancelar"
        document.getElementById('cancel-modal-btn').addEventListener('click', closeModal);
    </script>
                <!-- Aquí puedes incluir la referencia a los scripts necesarios, por ejemplo, para Tailwind CSS y otros -->
    </body>



    </html>
@endsection
