const validationFormElm=document.querySelector('.validationForm');
const requiredElms=document.querySelectorAll('.required');
console.log(requiredElms);


validationFormElm.addEventListener('submit',(e)=>{
    //エラーmessageの初期化
    const errorElms=document.querySelector('.error');
    errorElms.forEach((errorElm)=>{
        errorElm.remove();
    });

    requiredElms.forEach((requiredElm)=>{
        if(requiredElm.value){
            createError(requiredElm,'入力に不備があります');
        }
        e.preventDefault();
    });


});

const createError=(requiredElm,errorMessage)=>{
    const errorElm=document.createElement('p');
    errorElm.innerHTML=errorMessage;
    errorElm.classList.add('error');
    errorElm.style.color="red";
    requiredElm.after(errorElm);
}



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
