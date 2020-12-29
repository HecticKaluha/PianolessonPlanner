function closeModal() {
    console.log('closing');
    bookEventModal.classList.add('hidden')
}

function bookEvent() {
    console.log('booking');
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    var body = {
        slotId: slotId.getAttribute('value'),
        name: nameInput.value,
        email: email.value,
        category_id: category.value,
        remarks: remarks.value
    };
    console.log(body);
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
        console.log(data);
        
        calendar.removeAllEvents();
        calendar.refetchEvents();
    })
    .catch(function (error) {
        console.log(error);
    });
    closeModal();

}

function openModal(slot) {
    slotDate.innerText = "";
    slotTime.innerText = "";
    slotId.value = "";

    slotDate.innerText = slot.start.toDateString();
    slotTime.innerText = slot.start.getHours() + ':' + slot.start.getMinutes() + ' - ' + slot.end.getHours() + ':' + slot.end.getMinutes();
    slotId.value = slot.extendedProps.customId;
    bookEventModal.classList.remove('hidden');
}
