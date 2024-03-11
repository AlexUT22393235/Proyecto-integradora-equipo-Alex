

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
                <a href="asesoresyestudiantes">
                  <button class="text-white">Asesores-Estudiantes</button>
                </a>
                
                <a href="AdminAsesores">
                  <button class="text-white">Asesores</button>
              </a>
                <a href="Admindocs">
                    <button class="text-white">Documentos</button>
                </a>
                <a href="Direccion">
                  <button class="text-white">Direccion</button>
              </a>
              <a href="calendario">
                <button class="text-white">Calendario</button>
            </a>
            </div>
        </div>

        <div class="flex items-center">
            <input type="text" placeholder="Buscar..." class="p-2 mr-4 bg-white rounded-md">
        </div>
    </div>
</nav>
   <main>
    @yield('content')

    <Navbar>
        <div class="w-full bg-[#325B87] flex flex-row p-3">
          <h1 class="timmana-regular text-wrap text-4xl my-auto ml-4 mr-0 mt-4 text-[#F8F8F8]">SGE | UT</h1>
          <div class="flex flex-row m-auto text-[#F8F8F8] gap-7 mr-4 inter-variacion ">
            
              <h3 class="div__ul-li m-auto">
                  Gestión de estadias
              </h3>
              <h3 class="div__ul-li m-auto">
                  Proyecto
              </h3>
              <h3 class="div__ul-li m-auto">
                  Calendario
              </h3>
              <h3 class="div__ul-li m-auto">
                  Documentos
              </h3>
              <img src='/user.png' class='h-[10%] w-[10%] items-center' alt="user"/>
          </div>
          <div class="flex-item user-img"></div>
        </div>
          <div class="bg-[#F8F8F8] h-[81%]">
             </Navbar>
   </main>
   <footer class=" p-2 text-white">
    <div class="container mx-auto flex items-center">
        <p class="mr-auto ml-4">Copyright Universidad Tecnológica de Cancún © 2024</p>
    </div>
</footer> 
</body>
</html>