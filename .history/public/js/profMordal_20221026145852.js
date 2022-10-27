const modalWrapperElm=document.querySelector('.modal-wrapper');
const imageElm=document.querySelector('.image');
const modalImageElm=document.querySelector('.modal-image');

imageElm.addEventListener('click',function(){
    modalWrapperElm.classList.add('show');
    modalImageElm.classList.add('show');

    let imageSrc=image.getAttribute('data-src');
    modalImageElm.src=imageSrc;
});

modalWrapperElm.addEventListener('click',function(){
    if(this.classList.contains('show')){
        this.classList.remove('show');
        modalImageElm.classList.remove('show');
    }
});





