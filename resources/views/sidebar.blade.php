@php
    // Definimos una variable de estado para el sidebar
    $isOpen = false;
@endphp

<div class="transition-all duration-300 w-60 bg-white overflow-y-auto" id="sidebar" class="{{ $isOpen ? 'max-w-60' : 'max-w-12' }}">
    <div style="background-color: #0D476D" class="flex items-center cursor-pointer py-4 pl-4 text-white" onclick="toggleSidebar()">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        <span class="text-lg">Opciones</span>
    </div>
    <div class="sidebar-menu">
        <div class="sidebar-option flex items-center py-4 px-8 cursor-pointer transition duration-300 hover:bg-cyan-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4v16c0 .6.4 1 1 1 .6 0 1-.4 1-1V4c0-.6-.4-1-1-1-.6 0-1 .4-1 1z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 4v16c0 .6-.4 1-1 1-.6 0-1-.4-1-1V4c0-.6.4-1 1-1 .6 0 1 .4 1 1z" />
            </svg>
            <span>Nueva carta</span>
        </div>
        <div class="sidebar-option flex items-center py-4 px-8 cursor-pointer transition duration-300 hover:bg-cyan-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span>Cartas enviadas</span>
        </div>
        <div class="sidebar-option flex items-center py-4 px-8 cursor-pointer transition duration-300 hover:bg-cyan-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span>Cartas recibidas</span>
        </div>
        <div class="sidebar-option flex items-center py-4 px-8 cursor-pointer transition duration-300 hover:bg-cyan-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span>Borradores</span>
        </div>
        <div class="sidebar-option flex items-center py-4 px-8 cursor-pointer transition duration-300 hover:bg-cyan-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span>Plantillas</span>
        </div>
        <div class="sidebar-option flex items-center py-4 px-8 cursor-pointer transition duration-300 hover:bg-cyan-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span>Notificaciones</span>
        </div>
    </div>
</div>

<script>
    // Función para alternar el estado del sidebar entre expandido y contraído
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('max-w-60');
        sidebar.classList.toggle('max-w-12');
    }
</script>