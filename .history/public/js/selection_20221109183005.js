console.log(1);









async function selectionTab(){
    url='http://127.0.0.1:8000/api/corporate/selection';
    const response=await fetch(url);
    const data=await response.json();

    console.log(data.apiCorporateSelection.length);

    for (let i=0;i>data.apiCorporateSelection.length)
    const tabElm=document.createElement('.span');
    tabElm.classList('')

}


const selectionTabElm=document.querySelector('.selectionTab');

document.addEventListener('DOMContentLoaded',selectionTab);
