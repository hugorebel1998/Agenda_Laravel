document.addEventListener('DOMContentLoaded', function() {
    
    let formmulario = document.querySelector('form');
    var calendarEl = document.getElementById('agenda');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: "es", 
      headerToolbar: {
          left:'prev,next,todat', 
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,listWeek'
      },
      dateClick:function(info){

        $('#evento').modal('show');
      },
    });
    calendar.render();

    document.getElementById('btnGuardar').addEventListener('click', function(){
     const datos = new FormData(formmulario);
     console.log(datos.values);
    });

  });