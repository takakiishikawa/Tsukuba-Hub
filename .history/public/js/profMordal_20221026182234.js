let profModalWrapperElm=document.querySelector('.modal-wrapper');
let profModalImageElm=document.querySelector('.profModalImage');
let imageElm=document.querySelector('.image');


console.log(imageElm);



imageElm.addEventListener('click',()=>{
    console.log('xxx');

    profModalWrapperElm.classList.add('show');
    profModalImageElm.classList.add('show');

    const image=imageElm.getAttribute('src');
    profModalImageElm.innerHTML=image;
});

let tmp=document.querySelector(".aiueo");
console.log(tmp[0]===null);


