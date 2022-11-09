const validationFormElm=document.querySelector('.validationForm');
const requiredElms=document.querySelectorAll('.required');
const checkboxRequiredElms=document.querySelectorAll('.checkboxRequired');
console.log(checkboxRequiredElms);


validationFormElm.addEventListener('submit',(e)=>{
    //エラーmessageの初期化
    const errorElms=document.querySelectorAll('.error');
    errorElms.forEach((errorElm)=>{
        errorElm.remove();
    });


    requiredElms.forEach((requiredElm)=>{
        if(!requiredElm.value){
            if(requiredElm.tagName==='SELECT'){
                createError(requiredElm,'一つ以上選択をしてください');
            }else{
                createError(requiredElm,'入力に不備があります');
            }
            e.preventDefault();
        }
    });

    checkboxRequiredElms.forEach((checkboxRequiredElm)=>{
        const checkboxElms=checkboxRequiredElm.querySelectorAll('[type="checkbox"]');
        checkboxElms.forEach((checkboxElm)=>{
            let count=0;
            if(checkboxElm.checked){
                count++;
            }
            if(count===0){
                createError(checkboxRequiredElm,'一つ以上チェックを付けてください');
            }
        });
    });

});

const createError=(requiredElm,errorMessage)=>{
    const errorElm=document.createElement('p');
    errorElm.innerHTML=errorMessage;
    errorElm.classList.add('error');
    errorElm.style.color="red";
    requiredElm.after(errorElm);
}


