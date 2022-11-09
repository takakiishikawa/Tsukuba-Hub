const validationFormElm=document.querySelector('.validationForm');

const requiredElms=document.querySelectorAll('.required');
console.log(requiredElms);

validationFormElm.addEventListener('submit',(e)=>{
    const errorElms=document.querySelectorAll('.error');
    errorElms.remove();

    requiredElms.forEach((requiredElm)=>{
        console.log(requiredElm.value);

    });


    e.preventDefault();
})
