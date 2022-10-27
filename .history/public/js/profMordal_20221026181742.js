let profModalWrapperElm=document.querySelector('.modal-wrapper');
let profModalImageElm=document.querySelector('.profModalImage');
let imageElm=document.querySelector('.image');


console.log(imageElm);



profElm.addEventListener('click',()=>{
    console.log('xxx');

    profModalWrapperElm.classList.add('show');
    profModalImageElm.classList.add('show');

    const image=profElm.getAttribute('src');
    profModalImageElm.innerHTML=image;
});



