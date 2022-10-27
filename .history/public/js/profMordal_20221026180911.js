let profModalWrapperElm=document.querySelector('.modal-wrapper');
let profModalImageElm=document.querySelector('.profModalImage');
let profElm=document.querySelector('.prof');


console.log(profModalWrapperElm);



profElm.addEventListener('click',()=>{
    console.log('xxx');

    profModalWrapperElm.classList.add('show');
    profModalImageElm.classList.add('show');

    const image=profElm.getAttribute('src');
    profModalImageElm.innerHTML=image;
});



