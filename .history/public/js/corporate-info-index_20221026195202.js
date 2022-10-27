const profModalWrapperElm=document.querySelector('.profModalWrapper');
const profModalImageElm=document.querySelector('.profModalImage');
const profImageElm=document.querySelector('.profImage');

profImageElm.addEventListener('click',()=>{
    profModalWrapperElm.classList.add('show');
    profModalImageElm.classList.add('show');

    const image=profImageElm.getAttribute('src');
    profModalImageElm.innerHTML=image;
});

profModalWrapperElm.addEventListener('click',function(){
    if(this.classList.contains('show')){
        this.classList.remove('show');
        profModalImageElm.classList.remove('show');
    }
});



modalWrapper.addEventListener('click', function() {
    if (this.classList.contains('show')) {
         this.classList.remove('show');
         modalImage.classList.remove('show');
    }
});
