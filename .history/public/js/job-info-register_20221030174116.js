const validationFormElm=document.querySelector('.validationForm');
const requiredElms=document.querySelectorAll('.required');

validationFormElm.addEventListener('submit',(e)=>{
    const errorElms=document.querySelectorAll('.error');
    errorElms.forEach((errorElm)=>{
        errorElm.remove();
    })

    requiredElms.forEach((requiredElm)=>{
        if(!requiredElm.value){
            if(requiredElm.tagName==='SELECT'){
                createError(requiredElm,'項目を選択してください')
            }else{
                createError(requiredElm,'入力不備です');
            }
            e.preventDefault();
        }
    });
});

const createError=(requiredElm,errorMessage)=>{
    const errorElm=document.createElement('p');
    errorElm.classList.add('error');
    errorElm.style.color="red";
    errorElm.innerHTML=errorMessage;
    requiredElm.after(errorElm);
}
