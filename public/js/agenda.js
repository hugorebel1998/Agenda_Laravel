let base = location.protocol + '//' + location.host;
// const csrfToken = document.getElementsByName('csrf-token')[0].getAttribute('content')



document.addEventListener('DOMContentLoaded', function () {

    // let formmulario = document.querySelector('form');
    let formElement = document.getElementById('formCallender');
    var calendarEl = document.getElementById('agenda');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: "es",
        headerToolbar: {
            left: 'prev,next,todat',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
        },

        events: base + '/agenda/show',

        dateClick: function (info) {
            formElement.start.value = info.dateStr;
            formElement.end.value = info.dateStr;
            $('#evento').modal('show');
        },
        eventClick: function (info) {
            let evento = info.event;
            console.log(evento);

            let url = base + '/agenda/edit/' + info.event.id;
            
            console.log(url);
            axios.post(url).then((resp) => {
            formElement.title.value = resp.data.title;
            formElement.description.value = resp.data.description;
            formElement.start.value = resp.data.start;
            formElement.end.value = resp.data.end;
                $('#evento').modal('show');

            }).catch((error) => {
                if (error.resp) {
                    console.log(error.resp.data);

                }
            })


        }
    });
    calendar.render();


    document.getElementById("btnGuardar").addEventListener("click", function () {

        let url = base + '/agenda/store';
        let formElement = document.getElementById('formCallender');
        let data = new FormData(formElement);

        axios.post(url, data).then((resp) => {
            console.log(resp);
            $('#evento').modal('hide');
            calendar.refetchEvents()
            formElement.reset();


        }).catch((error) => {
            if (error.resp) {
                console.log(error.resp.data);

            }
        })

    })



});