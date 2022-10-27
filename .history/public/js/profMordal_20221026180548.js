const profModalWrapperElm=document.querySelector('.profModalWrapper');
const profModalImageElm=document.querySelector('.profModalImage');
let profElm=document.querySelector('.prof');
let ageElm=document.querySelector('#age');


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






async function searchResult(){
    age=ageElm.value;
    const url='http://127.0.0.1:8000/api/ageResult/'+age;

    const response=await fetch(url);
    const data=await response.json();
    console.log(data);

    let ageResult=document.querySelector('#ageResult');
    ageResult.innerHTML=`
    想定検索結果&emsp;${data.count}名
    `;
}

ageElm.addEventListener('change',searchResult);










