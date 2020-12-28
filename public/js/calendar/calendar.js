function closeModal() {
    console.log('closes');
    bookEventModal.classList.add('hidden')
}
function bookEvent(){
    console.log('booking');
    closeModal();
}
function openModal() {
    bookEventModal.classList.remove('hidden');
}
