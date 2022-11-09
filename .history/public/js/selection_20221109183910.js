console.log(1);




async function selectionTab(){
    url='http://127.0.0.1:8000/api/corporate/selection';
    const response=await fetch(url);
    const data=await response.json();

    console.log(data.apiCorporateSelection.length);


    for (let i=0;i<data.apiCorporateSelection.length;i++){
        const tabElm=document.createElement('span');
        tabElm.classList=(`tab${i}`);
        tabElm.innerHTML=`
        ${data.apiCorporateSelection[i].engineer_name}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`;
        tabElm.style.color="#a36fbd";
        tabElm.style.fontWeight="bold";
        tabElm.style.cursor="pointer";
        tabElm.style.fontSize="30px";

        selectionTabElm.appendChild(tabElm);
    }


}


const selectionTabElm=document.querySelector('.selectionTab');

document.addEventListener('DOMContentLoaded',selectionTab);
