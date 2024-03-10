<!doctype html>
<html>

<head> @yield('header')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
</head>
<body class="bg-blue-50">
  <nav style="background-color: #325b87;">
    <div class="flex items-center justify-between p-6">
        <div class="flex items-center space-x-8">
            <a href="/">
                <img src="https://github.com/AlexUT22393235/Proyecto-integradora-equipo-Alex/blob/integracion/public/images/logo.png?raw=true" alt="Logo" class="w-auto mr-20 h-9 max-w-32">
            </a>

            <div class="font-semibold space-x-9">
                <a href="dashboardAsesor">
                  <button class="text-white">Vista presidente</button>
                </a>
                
                <a href="calendario">
                  <button class="text-white">Calendario</button>
              </a>
                <a href="ProyectosAsesor">
                    <button class="text-white">Vista de Proyectos</button>
                </a>
                <a href="estudiantesAsesorados">
                  <button class="text-white">Control Asesorados</button>
              </a>
              <a href="cartasAlumnoAdo">
                <button class="text-white">Control Cartas</button>
            </a>
              
            </div>
        </div>

    
    </div>
</nav>
   <main>
    @yield('content')
   </main>
</body>
</html>