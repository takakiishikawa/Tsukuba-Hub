const profModalWrapperElm=document.querySelector('.profModalWrapper');
const profModalImageElm=document.querySelector('.profModalImage');
const profElm=document.querySelector('.prof');

console.log(profElm);

profElm.addEventListener('click',()=>{
    alert('aa');
});


profElm.addEventListener('click',()=>{
    console.log('xxx');

    profModalWrapperElm.classList.add('show');
    profModalImageElm.classList.add('show');

    const image=profElm.getAttribute('src');
    profModalImageElm.innerHTML=image;
});



















