function closeModal() {
    console.log('closing');
    bookEventModal.classList.add('hidden')
}

function bookEvent() {
    clearFields();
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
            calendar.removeAllEvents();
            calendar.refetchEvents();
            closeModal();
            Swal.fire(
                'Slot booked!',
                'The selected slot was successfully booked',
                'success'
            );
        }
        else if(!data.success && data.exception){
            closeModal();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: data.exceptionMessage,
                footer: 'Contact the developer.'
            })
        }
        else{
            for(property in data.errors){
                document.getElementById(property+'Error').innerText = data.errors[property];
            }
        }

    })
    .catch(function (error) {
        console.log(error);
    });

}

function openModal(slot) {
    clearFields();
    slotId.value = "";

    slotDate.innerText = slot.start.toDateString();
    slotTime.innerText = slot.start.getHours() + ':' + slot.start.getMinutes() + ' - ' + slot.end.getHours() + ':' + slot.end.getMinutes();
    slotId.value = slot.extendedProps.customId;
    bookEventModal.classList.remove('hidden');
}

function clearFields(fields = ['slotDate', 'slotTime', 'nameError', 'emailError', 'category_idError']){
    fields.forEach(function(value){
        document.getElementById(value).innerText = "";
    })
}
