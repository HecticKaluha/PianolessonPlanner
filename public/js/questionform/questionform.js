var sendQuestionFormButton = document.getElementById('sendQuestionForm');
sendQuestionFormButton.addEventListener('click', function() {
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    clearFields(['qfFullNameError', 'qfEmailError', 'qfMessageError', 'qfCheckSError']);
    var body = {
        qfFullName: qfFullName.value,
        qfEmail: qfEmail.value,
        qfMessage: qfMessage.value,
        qfCheckS: qfCheckS.value,
    };
    fetch(sendQuestionFormUrl, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token,
        },
        method: 'post',
        credentials: "same-origin",
        body: JSON.stringify(body)
    }).then(function(response){
        return response.json();
    }).then((data) => {
        console.log(data);
        if(data.success){
            clearFields(['qfFullNameError', 'qfEmailError', 'qfMessageError', 'qfCheckSError']);
            clearValues(['qfFullName', 'qfEmail', 'qfMessage']);
            Swal.fire({
                icon: 'success',
                title: 'Your question/remark has been sent',
                showConfirmButton: false,
                timer: 2000,
            });
        }
        else if(!data.success && data.exception){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: data.exceptionMessage ? data.exceptionMessage : 'Some code seems to be broken...',
                footer: 'Contact the developer.'
            })
        }
        else{
            for(property in data.errors){
                document.getElementById(property +'Error').innerText = data.errors[property];
            }
        }
    }).catch(function (error) {
        Swal.fire({
            icon: 'error',
            title: "Something went wrong whilst submitting your form",
            text: error.message,
            footer: 'Contact the developer.'
        })
    });
});
