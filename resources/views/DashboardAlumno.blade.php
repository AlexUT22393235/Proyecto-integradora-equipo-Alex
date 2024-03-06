@vite('resources/css/app.css')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Alumno</title>
</head>
<body>
    
    <main>
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
            <Navbar></Navbar>
            <Title titulo="Sistema de Gestión de Estadías"></Title>
            <div class="flex flex-row m-auto mx-20 mt-7  h-full gap-8 inter-variacion ">
              <div class="h-full w-[25%]">
                <div class="bg-white h-[245px] w-full text-left mb-8  p-4 rounded-xl shadow-xl">
                  <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                    Asesor Académico
                  </h4>
                  <p class=" pb-3 text-lg">Rafael Villegas</p>
                  <p class=" pb-3 text-lg">rvillegas@utcancun.edu.mx</p>
                </div>
                <div class="bg-white h-[245px] text-left mb-8 p-4 rounded-xl w-full shadow-xl">
                  <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                    Calendario
                  </h4>
                  <p class=" pb-3 text-lg">Citas próximas</p>
                  <p class=" pb-3 text-lg">Tareas pendientes</p>
                </div>
              </div>
              <div class="h-full w-[25%] ">
                <div class="bg-white h-[245px] w-full text-left mb-8  p-4 rounded-xl shadow-xl">
                  <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                    Estatus del proyecto
                  </h4>
                  <p class=" pb-3 text-lg">Comentarios</p>
                  <p class=" pb-3 text-lg">Votos</p>
                </div>
                <div class="bg-white h-[245px] text-left mb-8 p-4 rounded-xl w-full shadow-xl">
                  <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                    Documentos
                  </h4>
                  <p class=" pb-3 text-lg">Rafael Villegas</p>
                  <p class=" pb-3 text-lg">rvillegas@utcancun.edu.mx</p>
                </div>
              </div>
              <div class="bg-white h-[520px]  w-[25%]  text-left mb-8  p-4 rounded-xl shadow-xl">
                <img src='/grafic.png' alt="Grafica" class=" h-[50%] w-[98%] p-3"/>
                <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                  Avances del proyecto
                </h4>
                <p class=" pb-3 text-lg">Realizado </p>
                <p class=" pb-3 text-lg">Por complementar</p>
              </div>
              <div class="bg-white h-[520px]  w-[25%] text-left mb-8  p-4 rounded-xl shadow-xl">
                <h4 class="text-[#010D82] pb-2 text-xl montserrat-alternates-regular-italic">
                  Tareas próximas faltantes
                </h4>
                <p class=" pb-3 px-2 text-left m-auto text-lg">
                  Corrección de objetivo principal
                  <input type="checkbox" />
                </p>
                <p class=" pb-3 px-2 m-auto text-justify text-lg">
                  Corrección de título
                  <input type="checkbox" />
                </p>
              </div>
            </div>
          </div>
    </main>
    <footer>
        <div class='bg-[#325B87] w-full mb-0 h-10 '>
            <p class='text-[#F8F8F8] text-left ml-5 p-2 inter-variacion'>Copyright Universidad Tecnológica de Cancún © 2024</p>
          </div>
    </footer>
</body>
</html>