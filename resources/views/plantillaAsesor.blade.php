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
<!--SE AGREGÓ JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
      $('#fecha_inicial').val(info.dateStr);
      openModal();
      console.log(info);
      calendar.addEvent({title:"X", date:info.dateStr});

    },

    eventClick:function(info){
      alert('Título: ' + info.event.title + ' Descripcion: ' + info.event.extendedProps.descripcion);
      // alert('Descripcion: ' + info.event.extendedProps.descripcion);

    },

    // events: [
    //   //Hey, rey, todo funciona en conjunto, tanto controladores, modelos, vistas y rutas, no lo olvides
      
     

    // ],

    events:"{{url('/calendario/show')}}",

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
        //Se agregaron funciones para capturar y mandar datos a la DB

        $('#addEvent').click(function(){
        ObjEvento=RecolectData("POST");
        sendInformation('', objEvento)
      });

      function RecolectData(mehtod){
        newEvent={
              titulo:$('#titulo').val(),
              tarea:$('#tarea').val(),
              fecha_inicial:$('#fecha_inicial').val(),	
              fecha_final:$('#fecha_final').val(),
              "_token":$("meta[name='csrf-token']").attr("content"),
              'method':method
        }
        return(newEvent)
      }

      function sendInformation(accion, objEvento){
        $.ajax({
          type:"POST",
          url:"{{url('/calendario')}}" + accion,
          data: objEvento,
          success:function(msg){console.log(msg);} ,
                  error:function(){ alert(Error);}
        })
      }

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

                <a href="calendario">
                  <button class="text-white">Calendario</button>
              </a>
                <a href="ProyectosAsesor">
                    <button class="text-white">Proyectos</button>
                </a>
                <a href="estudiantesAsesorados">
                  <button class="text-white">Asesorados</button>
              </a>
              <a href="AsesorDocs">
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