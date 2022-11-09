console.log(1);


async function niceModal(){

    const url='http://127.0.0.1:8000/nice/';

    const response=await fetch(url);
    const data=await response.json();

    data.niceCreatedList.forEach((niceCreatedOne)=>{
        if(data.logged<niceCreatedOne.niceCreated){
            alert(`${niceCreatedOne.niceEngineerName}さんからいいねが届きました!`);
        }else{
            console.log('わん');

        }
        console.log(data.logged);
        console.log(niceCreatedOne.niceCreated);
    })
}

document.addEventListener('DOMContentLoaded',niceModal());
