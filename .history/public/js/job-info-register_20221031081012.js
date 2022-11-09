const validationFormElm=document.querySelector('.validationForm');
const requiredElms=document.querySelectorAll('.required');
const requiredElms2=document.querySelectorAll('.recruitment_job [name="recruitment_job"]');
console.log(requiredElms2);

validationFormElm.addEventListener('submit',(e)=>{
    const errorElms=document.querySelectorAll('.error');
    errorElms.forEach((errorElm)=>{
        errorElm.remove();
    })

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
    requiredElms2.forEach((requiredElm2)=>{
        if(requiredElm2.checked){
            this.count++;
        }
    });
    console.log(count);

});

const createError=(requiredElm,errorMessage)=>{
    const errorElm=document.createElement('p');
    errorElm.classList.add('error');
    errorElm.style.color="red";
    errorElm.innerHTML=errorMessage;
    requiredElm.after(errorElm);
}
