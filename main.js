const modal = document.querySelector('.modal');
const overlay = document.querySelector('.overlay');
const btnCloseModal = document.querySelector('.btn--close-modal');
const btnOpenModal = document.querySelector('.btn--show-modal');


function togglevideo(){
    const modal = document.querySelector('.modal');
    const overlay = document.querySelector('.overlay');
    console.log("hello");
    modal.classList.remove('hidden');
    overlay.style.width="100%";
}

function closeLogin(){
    const modal = document.querySelector('.modal');
    const overlay = document.querySelector('.overlay');
    modal.classList.add('hidden');
    overlay.style.width="0";
}
