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
<!-- CalendarioRelaciones -->
<!-- De salir algo mal, retirar todo de esta sección -->
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          headerToolbar: {
      start: 'prev,next deleteActivities',
      center: 'title',
      end: 'today dayGridMonth,timeGridWeek'
    },
    customButtons:{
      deleteActivities:{
        text:'Limpiar',
      
        click:function(){
          $('#modal')
          console.log("Se han borrado las actividades")
        }
      }
    },

    dateClick:function(info){
      openModal();
      console.log(info);
      calendar.addEvent({title:"X", date:info.dateStr});
      
    },

    eventClick:function(info){
      alert('Título: ' + info.event.title + ' Descripcion: ' + info.event.extendedProps.descripcion);
      // alert('Descripcion: ' + info.event.extendedProps.descripcion);

    },

    events: [
    {
        title: "X",
        start: "2024-03-12T13:00:00", // Updated to ISO 8601 format,
        end:"2024-03-13T13:00:00"
    },
    {
        title: "Y",
        start: "2024-03-14T13:00:00", // Updated to ISO 8601 format,
        end:"2024-03-15T13:00:00",
        descripcion:"Descripcion"

    }
    
],
    eventColor: 'rgb(50, 91, 135)',
    

    buttonText: {
      today: 'Hoy', // Cambia el texto del botón "today" a "Hoy"
      dayGridMonth: 'Mes',
      timeGridWeek: 'Semana'
    },
    
          defaultDay: new Date(2024,3,12),
          initialView: 'dayGridMonth'
        });
        calendar.setOption('locale', 'Es');
        calendar.render();
      });

    </script>
  
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
                  <button class="text-white">Dashboard</button>
                </a>
                
                <a href="calendarioAsesor">
                  <button class="text-white">Calendario</button>
              </a>
                <a href="ProyectosAsesor">
                    <button class="text-white">Proyectos</button>
                </a>
                <a href="estudiantesAsesorados">
                  <button class="text-white">Asesorados</button>
              </a>
              <a href="cartasAlumnoAdo">
                <button class="text-white">Documentos</button>
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