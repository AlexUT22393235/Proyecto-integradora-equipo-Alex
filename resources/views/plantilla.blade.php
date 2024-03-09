<!doctype html>
<html>

<head> @yield('header')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
</head>
<body>
  <nav style="background-color: #325b87;">
    <div class="flex items-center justify-between p-6">
        <div class="flex items-center space-x-8">
            <a href="/">
                <img src="https://github.com/AlexUT22393235/Proyecto-integradora-equipo-Alex/blob/integracion/public/images/logo.png?raw=true" alt="Logo" class="w-auto mr-20 h-9 max-w-32">
            </a>

            <div class="font-semibold space-x-9">
                <a href="Control">

                </a>
                <button class="text-white">Asesores-Estudiantes</button>
                <a href="AdminAsesores">
                  <button class="text-white">Asesores</button>
              </a>
                <a href="Admindocs">
                    <button class="text-white">Documentos</button>
                </a>
                <a href="Direccion">
                  <button class="text-white">Direccion</button>
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