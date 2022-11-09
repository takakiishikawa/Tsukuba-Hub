const validationFormElm=document.querySelector('.validationForm');
const requiredElms=document.querySelectorAll('.required');

console.log(validationFormElm);

validationFormElm.addEventListener('submit',(e)=>{
    //エラーmessageの初期化
    const errorElms=document.querySelector('.error');
    errorElms.forEach((errorElm)=>{
        errorElm.remove();
    });
    console.log(1);

    requiredElms.forEach((requiredElm)=>{
        if(!requiredElm.value){
            console.log(requiredElm.value);
            console.log(1);
            createError(requiredElm,'入力に不備があります');
            e.preventDefault();
        }
    });
});

validationFormElm.addEventListener('submit',(e)=>{
    const errorElms=document.querySelectorAll('.error');
    errorElms.forEach((errorElm)=>{
        errorElm.remove();
    });

    requiredElms.forEach((requiredElm)=>{
        if(!requiredElm.value || requiredElm.checked){
            if(requiredElm.tagName==='SELECT'){
                createError(requiredElm,'項目を選択してください')
            }else{
                createError(requiredElm,'入力不備です');
            }
            e.preventDefault();
        }
    });

const createError=(requiredElm,errorMessage)=>{
    const errorElm=document.createElement('p');
    errorElm.innerHTML=errorMessage;
    errorElm.classList.add('error');
    errorElm.style.color="red";
    requiredElm.after(errorElm);
}


