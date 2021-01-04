document.addEventListener('DOMContentLoaded', function() {
    //get the categories
    fetch(categoriesUrl, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
        },
        method: 'get',
        credentials: "same-origin"
    }).then(function(response){
        return response.json();
    }).then(function(data){
        data.data.forEach(function(value){
            var opt = document.createElement('option');
            opt.setAttribute('value', value.id);
            opt.innerText = value.name;
            category.appendChild(opt);
        });
    }).catch(function (error) {
        Swal.fire({
            icon: 'error',
            title: "Couldn't get the categories.",
            text: error.message,
            footer: 'Contact the developer.'
        })
    });
});

document.addEventListener('DOMContentLoaded', function() {
    calendarEl = document.getElementById('calendar');
    calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        eventDisplay: 'block',
        eventBorderColor:'transparent',
        eventOrder:'start',
        loading: function(isLoading) {
            if (isLoading){
                document.getElementById('loading').style.display = "block";
                document.getElementById('calendar').style.opacity = "0.3";
            }
            else {
                document.getElementById('loading').style.display = "none";
                document.getElementById('calendar').style.opacity = "1";
            }
        },
        eventSources: [
            {
                url:slotsUrl,
            }
        ],
        eventSourceSuccess: function(content, xhr) {
            events = [];
            content.data.forEach(function(value){
                events.push(
                    {
                        title: '',
                        start: value.date + 'T' + value.startTime,
                        end: value.date + 'T' + value.endTime,
                        allDay: false,
                        customId: value.id,
                        customBooked: value.booked,
                        customBookable: value.bookable
                    }
                );
            });
            return events;
        },
        eventSourceFailure: function(error){
            Swal.fire({
                icon: 'error',
                title: "Couldn't get the slots...",
                text: error.message,
                footer: 'Contact the developer.'
            });
        },
        height: 'auto',
        eventDidMount: function(custom){
            if(!custom.event.extendedProps.customBooked && custom.event.extendedProps.customBookable){
                custom.el.classList.add('bg-green-500', 'cursor-pointer');
                custom.el.onclick = function () {
                    openModal(custom.event);
                };
            }
            else if(!custom.event.extendedProps.customBooked && !custom.event.extendedProps.customBookable){
                custom.el.classList.add('bg-green-500');
            }
            else if(custom.event.extendedProps.customBooked){
                custom.el.classList.add('bg-red-500');

            }

            if(!custom.event.extendedProps.customBookable){
                custom.el.classList.add('opacity-70');
            }
        },
    });
    calendar.render();
    $('.fc-toolbar-chunk').addClass('flex justify-end flex-wrap');
});

function closeModal() {
    bookEventModal.classList.add('hidden')
}

function bookEvent() {
    clearFields(['nameError', 'emailError', 'category_idError']);
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    var body = {
        slotId: slotId.getAttribute('value'),
        name: nameInput.value,
        email: email.value,
        category_id: category.value,
        remarks: remarks.value
    };
    fetch(bookSlotUrl, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        credentials: "same-origin",
        body: JSON.stringify(body)
    })
    .then((response) => {
        return response.json();
    }).then((data) => {
        if(data.success){
            closeModal();
            Swal.fire(
                'Slot booked!',
                'We will send you an e-mail with details swiftly.',
                'success'
            ).then(()=>{
                calendar.refetchEvents();
            });
        }
        else if(!data.success && data.exception){
            closeModal();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: data.exceptionMessage ? data.exceptionMessage : 'Some code seems to be broken...',
                footer: 'Contact the developer.'
            })
        }
        else{
            for(property in data.errors){
                if(property === 'slotId'){
                    closeModal();
                    Swal.fire({
                        icon: 'warning',
                        title: 'Sorry',
                        text: data.errors[property].join(" "),
                    }).then(()=>{
                        calendar.refetchEvents();
                    })
                }
                else{
                    document.getElementById(property+'Error').innerText = data.errors[property];
                }
            }
        }
    })
    .catch(function (error) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: error.message,
            footer: 'Contact the developer.'
        })
    });
}

function openModal(slot) {
    clearFields();
    slotId.value = "";

    slotDate.innerText = slot.start.toDateString();
    slotTime.innerText = slot.start.getHours() + ':' + (slot.start.getMinutes().toString().length == 1 ? '0' + slot.start.getMinutes() : slot.start.getMinutes()) + ' - ' + slot.end.getHours() + ':' + (slot.end.getMinutes().toString().length <= 1 ? '0' + slot.end.getMinutes() : slot.end.getMinutes());
    slotId.value = slot.extendedProps.customId;
    bookEventModal.classList.remove('hidden');
}

function clearFields(fields = ['slotDate', 'slotTime', 'nameError', 'emailError', 'category_idError']){
    fields.forEach(function(value){
        document.getElementById(value).innerText = "";
    })
}
