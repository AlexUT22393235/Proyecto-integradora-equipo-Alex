<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Tu Universidad - Iniciar sesión</title>
</head>
<body class="flex items-center justify-center h-screen relative bg-[#EEF1F9]">

    <div class="h-32 w-32 rounded-full overflow-hidden absolute top-40 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10">
        <img src="UT1.jpeg" alt="Logo de tu universidad" class="w-full h-full object-contain">
    </div>

    <div class="bg-white p-12 rounded-3xl shadow-md w-full max-w-md relative overflow-hidden z-0">
    <h3 class="mt-12 text-center font-bold text-2xl mb-2">Sistema de Gestión de Estadías</h3>
		<h3 class="text-gray-400 text-center font-semibold text-lg">Identificate con tu correo y contraseña</h3>
		<br>
        <form action="#" method="POST" class="flex flex-col"> 
            <div class="mb-4">
                <input type="text" id="username" name="username" placeholder="Ingrese su correo" class="text-lg font-semibold text-center w-full px-3 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" class="text-lg font-semibold text-center w-full px-3 py-2 border rounded-md">
            </div>
			<div class="flex flex-col items-center">
            <button type="submit" class="text-lg font-semibold w-full bg-[#029680] text-white py-2 rounded-md hover:bg-[#4e988c] transition-transform duration-300 transform hover:scale-105 focus:outline-none focus:shadow-outline-blue">Ingresar</button>
			</div>
		</form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('form').addEventListener('submit', function (event) {
                event.preventDefault();
        
                var username = document.getElementById('username').value;
                var password = document.getElementById('password').value;

                // Aquí vamos a verificar que los campos se llenen
                if (!username || !password) {
                alert('Por favor, ingrese tanto el correo como la contraseña.');
                return;
                }
        
                // Aquí vamos a validar los correos y contraseñas
                var validCredentials = {
                    'direccion@ut.com': '1234',
                    'alumno@ut.com': '1234',
                    'asesor@ut.com': '1234',
                    'presidente@ut.com': '1234',
                    'administrador@ut.com': '1234',
                };
        
                if (validCredentials.hasOwnProperty(username) && validCredentials[username] === password) {
                    //En caso de que las credenciales sean las correctas ya redirigirá a la vista correspondiente
                    switch (username) {
                        case 'direccion@ut.com':
                            window.location.href = '/Direccion';
                            break;
                        case 'alumno@ut.com':
                            window.location.href = '/DashboardAlumno';
                            break;
                        case 'asesor@ut.com':
                            window.location.href = '/dashboardAsesor';
                            break;
                        case 'presidente@ut.com':
                            window.location.href = '/dashboardPresidente';
                            break;
                        case 'administrador@ut.com':
                            window.location.href = '/dashboardAdmin';
                            break;
                        default:
                            // En caso de error redirige a una pantalla de error
                            window.location.href = '/error';
                    }
                } else {
                    // Alerta para indicar que el correo o contraseña son incorrectos
                    alert('Correo o contraseña invalido');
                }
            });
        });
        </script>
</body>
</html>
