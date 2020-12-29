function closeModal() {
    console.log('closing');
    bookEventModal.classList.add('hidden')
}
function bookEvent(){
    console.log('booking');
    closeModal();
}
function openModal(slot) {
    slotDate.innerText = slot.start.toDateString();
    slotTime.innerText = slot.start.getHours() + ':' + slot.start.getMinutes() + ' - ' + slot.end.getHours() + ':' + slot.end.getMinutes();

    bookEventModal.classList.remove('hidden');
}
