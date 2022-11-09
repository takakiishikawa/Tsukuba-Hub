async function niceModal(){

    const url='http://127.0.0.1:8000/nice/';

    const response=await fetch(url);
    const data=await response.json();


    data.niceCreatedList.forEach((niceCreatedOne)=>{

    const xxx=Date.parse(data.logged);
    const yyy=Date.parse(niceCreatedOne.niceCreated);
        if(xxx < yyy){
            alert(`${niceCreatedOne.niceEngineerName}さんからいいねが届きました!`);
        }else{
        }

    });
}

document.addEventListener('DOMContentLoaded',niceModal());
