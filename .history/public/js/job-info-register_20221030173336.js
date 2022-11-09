const validationFormElm=document.querySelector('.validationForm');

const requiredElms=document.querySelectorAll('.required');

validationFormElm.addEventListener('submit',(e)=>{
    const errorElms=document.querySelectorAll('.error');
    errorElms.remove();

    requiredElms.forEach((requiredElm)=>{
        if(!requiredElm.value){

            createError(requiredElm,'入力不備です！');
        }
    });
    e.preventDefault();
});

createError(requiredElm,errorMessage){
    const errorElm=document.createElement('p');
    errorElm.classList.add('error');
    errorElm.innerHTML=errorMessage;
    requiredElm.after(errorElm);
}

