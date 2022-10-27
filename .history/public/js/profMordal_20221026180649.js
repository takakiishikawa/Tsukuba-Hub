let profModalWrapperElm=document.querySelector('.profModalWrapper');
let profModalImageElm=document.querySelector('.profModalImage');
let profElm=document.querySelector('.prof');
let ageElm=document.querySelector('#age');


console.log(profElm);



profElm.addEventListener('click',()=>{
    console.log('xxx');

    profModalWrapperElm.classList.add('show');
    profModalImageElm.classList.add('show');

    const image=profElm.getAttribute('src');
    profModalImageElm.innerHTML=image;
});



