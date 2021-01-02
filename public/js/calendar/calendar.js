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
            var refetchPromise = new Promise((resolve, reject)=>{
                try{
                    calendar.refetchEvents();
                    resolve();
                }
                catch(error){
                    reject(error);
                }
            })
            refetchPromise.then(()=>{
                closeModal();
                Swal.fire(
                    'Slot booked!',
                    'The selected slot was successfully booked',
                    'success'
                );
            }).catch((error)=>{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: error.message,
                    footer: 'Contact the developer.'
                })
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
                    refetchPromise = new Promise((resolve, reject)=>{
                        try{
                            calendar.refetchEvents();
                            resolve(property);
                        }
                        catch(error){
                            reject(error);
                        }
                    });
                    refetchPromise.then((prop)=>{
                        closeModal();
                        Swal.fire({
                            icon: 'warning',
                            title: 'Sorry',
                            text: data.errors[prop],
                        })
                    }).catch((error)=>{
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: error.message,
                            footer: 'Contact the developer.'
                        })
                    });
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
    slotTime.innerText = slot.start.getHours() + ':' + slot.start.getMinutes() + ' - ' + slot.end.getHours() + ':' + slot.end.getMinutes();
    slotId.value = slot.extendedProps.customId;
    bookEventModal.classList.remove('hidden');
}

function clearFields(fields = ['slotDate', 'slotTime', 'nameError', 'emailError', 'category_idError']){
    fields.forEach(function(value){
        document.getElementById(value).innerText = "";
    })
}
