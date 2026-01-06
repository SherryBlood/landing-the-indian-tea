document.addEventListener('DOMContentLoaded', function () {
    const modal = document.querySelector('.my-backdrop');
    const modalCloseBtn = document.querySelector('.modal-close-btn');
    const modalOpenBtn = document.querySelector('.modal-open-btn');

    const toggleModal = () => modal.classList.toggle('is-hidden');

    if (modalOpenBtn) modalOpenBtn.addEventListener('click', toggleModal);
    if (modalCloseBtn) modalCloseBtn.addEventListener('click', toggleModal);
});