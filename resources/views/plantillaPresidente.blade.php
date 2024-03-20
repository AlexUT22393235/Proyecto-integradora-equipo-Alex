<!doctype html>
<html>

<head> @yield('header')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>


  footer{
          position: fixed;
          bottom: 0;
          width: 100%;
          background-color: #325B87; /* Color de fondo */
          text-align: left; /* Alineación del texto */
          color: white; /* Color del texto */
      }
  </style>
</head>
<body class="bg-blue-50">
  <nav style="background-color: #325b87;">
    <div class="flex items-center justify-between p-6">
        <div class="flex items-center space-x-8">
            <a href="/">
                <img src="https://github.com/AlexUT22393235/Proyecto-integradora-equipo-Alex/blob/integracion/public/images/logo.png?raw=true" alt="Logo" class="w-auto mr-20 h-9 max-w-32">
            </a>

            <div class="font-semibold space-x-9">
                <a href="dashboardPresidente">
                  <button class="text-white">Dashboard</button>
                </a>
                
                <a href="controlProyectoPresidente">
                  <button class="text-white">Proyectos</button>
              </a>
                <a href="AdminAsesores">
                    <button class="text-white">Asesores</button>
                </a>
                <a href="Admindocs">
                  <button class="text-white">Documentos</button>
              </a>
              <a href="asesoresyestudiantes">
                <button class="text-white">Asignación asesores</button>
            </a>
              
            </div>
        </div>

    
    </div>
</nav>
   <main>
    @yield('content')
   </main>
   <footer>
    <div class='bg-[#325B87] w-full mb-0 h-10 '>
        <p class='text-[#F8F8F8] text-left ml-5 p-2 inter-variacion'>Copyright Universidad Tecnológica de Cancún © 2024</p>
      </div>
</footer>
</body>
</html>