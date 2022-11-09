async function niceBothNicemodal(){

    const url='http://127.0.0.1:8000/nice/';

    const response=await fetch(url);
    const data=await response.json();


    this.modal();
    this.modal();

    data.niceCreatedList.forEach((niceCreatedOne)=>{

    const loggedTime=Date.parse(data.logged);
    const niceCreatedTime=Date.parse(niceCreatedOne.niceCreated);
        if(loggedTime < niceCreatedTime){
            alert(`${niceCreatedOne.niceEngineerName}さんからいいねが届きました!`);
        }else{
        }
    });
}

function modal($list,logged){
    data.niceCreatedList.forEach((niceCreatedOne)=>{

        const loggedTime=Date.parse(data.logged);
        const niceCreatedTime=Date.parse(niceCreatedOne.niceCreated);
            if(loggedTime < niceCreatedTime){
                alert(`${niceCreatedOne.niceEngineerName}さんからいいねが届きました!`);
            }else{
            }
        });
}




document.addEventListener('DOMContentLoaded',niceBothNicemodal());
