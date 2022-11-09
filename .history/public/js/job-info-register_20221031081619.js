const validationFormElm=document.querySelector('.validationForm');
const requiredElms=document.querySelectorAll('.required');
const requiredDivElms2=document.querySelectorAll('.recruitment_job [name="recruitment_job"]');
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
    let count=0;
    const requiredDivElm2=document.querySelector('.recruitment_job');
    requiredDivElms2.forEach((requiredDivElm2)=>{
        if(requiredDivElm2.checked){
            count+=1;
        }
    });
    if(count===0){
        createError(requiredDivElm2,"一つ以上のチェックをつけてください");
    }

});

const createError=(requiredElm,errorMessage)=>{
    const errorElm=document.createElement('p');
    errorElm.classList.add('error');
    errorElm.style.color="red";
    errorElm.innerHTML=errorMessage;
    requiredElm.after(errorElm);
}
