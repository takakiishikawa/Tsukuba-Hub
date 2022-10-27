const modalWrapperElm=document.querySelector('.modalWrapper');
const modalImageElm=document.querySelector('.modalImage');
const profImageElm=document.querySelector('.profImage');

profImageElm.addEventListener('click',()=>{
    modalWrapperElm.classList.add('show');
    modalImageElm.classList.add('show');

    const image=profImageElm.getAttribute('src');
    modalImageElm.innerHTML=image;

});
