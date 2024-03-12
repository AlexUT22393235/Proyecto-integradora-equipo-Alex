<!DOCTYPE html>
<html lang="es">

<head>
    @yield('header')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-[#EEF1F9]">
    <nav style="background-color: #325b87;">
        <div class="flex items-center justify-between p-6">
            <div class="flex items-center space-x-8">
                <a href="/dashboardAdmin">
                    <img src="https://github.com/AlexUT22393235/Proyecto-integradora-equipo-Alex/blob/integracion/public/images/logo.png?raw=true" alt="Logo"
                        class="w-auto mr-20 h-9 max-w-32">
                </a>

                <div class="font-semibold space-x-9">
                    <a href="/ProyectosAsesor">
                        <button class="text-white">Proyectos</button>
                    </a>
                    <a href="/CrudAsesorDeAdmin">
                        <button class="text-white">Asesores</button>
                    </a>
                    <a href="/CrudDireccionDeAdmin">
                        <button class="text-white">Dirección</button>
                    </a>
                    <a href="/CrudPresidenteDeAdmin">
                        <button class="text-white">Presidente</button>
                    </a>
                    <a href="/crudAlumnosAdmin">
                        <button class="text-white">Alumnos</button>
                    </a>
                    <a href="/permisos">
                        <button class="text-white">Permisos</button>
                    </a>
                </div>
            </div>

            <div class="relative group">
                <button id="userDropdown" class="focus:outline-none">
                    <img src='/user.png' class='h-[40%] w-[40%] items-center' alt="user" />
                </button>

                <div id="userDropdownContent" class="absolute right-0 hidden mt-2 w-48 bg-white border rounded-md shadow-lg">
                    <a href="/editarPerfil"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition duration-300">Editar
                        Perfil</a>
                    <a href="/"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition duration-300">Cerrar
                        Sesión</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
    <footer>
        <div class='bg-[#325B87] w-full mb-0 h-10 '>
            <p class='text-[#F8F8F8] text-left ml-5 p-2 inter-variacion'>Copyright Universidad Tecnológica de
                Cancún © 2024</p>
        </div>
    </footer>

    <script>
        const userDropdown = document.getElementById('userDropdown');
        const userDropdownContent = document.getElementById('userDropdownContent');

        userDropdown.addEventListener('click', () => {
            userDropdownContent.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            const isClickInside = userDropdown.contains(event.target) || userDropdownContent.contains(event.target);
            if (!isClickInside) {
                userDropdownContent.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
