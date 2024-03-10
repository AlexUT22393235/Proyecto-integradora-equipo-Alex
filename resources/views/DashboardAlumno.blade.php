@extends('plantilla')

@section( 'content')

<body>
    
    <main>
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
   
</body>
</html>
@endsection