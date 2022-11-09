const validationFormElm=document.querySelector('.validationForm');
const requiredElms=document.querySelectorAll('.required');
console.log(requiredElms);


validationFormElm.addEventListener('submit',()=>{
    //エラーmessageの初期化
    errorElm.remove();

    requiredElms.forEach((requiredElm)=>{
        if(requiredElm.value){
            createError(requiredElm,'入力に不備があります');
        }
    });

    const createError=(requiredElm,errorMessage)=>{
        const errorElm=document.createElement('p');
        errorElm.innerHTML=errorMessage;
        requiredElm.after(errorElm);
    }
});
