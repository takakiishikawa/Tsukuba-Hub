const validationFormElm=document.querySelector('.validationForm');
const requiredElms=document.querySelectorAll('.required');

validationFormElm.addEventListener('submit',(e)=>{
    const errorElms=document.querySelectorAll('.error');
    errorElms.forEach((errorElm)=>{
        errorElm.remove();
    })

    requiredElms.forEach((requiredElm)=>{
        if(!requiredElm.value){
            createError(requiredElm,'入力不備です！');
            e.preventDefault();
        }
    });
});

createError(requiredElm,errorMessage){
    const errorElm=document.createElement('p');
    errorElm.classList.add('error');
    errorElm.innerHTML=errorMessage;
    requiredElm.after(errorElm);
}



const validationFormElm=document.querySelector('.validationForm');
const requiredElms=document.querySelectorAll('.required');

  validationFormElm.addEventListener('submit',(e)=>{
    const errorElms=validationFormElm.querySelectorAll('.error');

    errorElms.forEach((errorElm)=>{
        errorElm.remove();
    });

    requiredElms.forEach((requiredElm)=>{
        const requiredElmValue=requiredElm.value;

        if(!requiredElmValue.value){
                createError(requiredElm,'入力必須です');
            e.preventDefault();
        }
    });
  });

  const createError=(requiredElm,errorMessage)=>{
    const errorElm=document.createElement('p');
    errorElm.classList.add('error');
    errorElm.innerHTML=errorMessage;
    requiredElm.after(errorElm);
  }
