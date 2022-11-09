async function niceBothNiceModal(){

    const url='http://127.0.0.1:8000/nice-modal/';

    const response=await fetch(url);
    const data=await response.json();


    modal(data.createList,data.logged);



}


const modal=(($list,$logged)=>{
    $list.forEach((one)=>{
        const loggedTime=Date.parse($logged);
        const niceCreatedTime=Date.parse(one.niceCreated);
            if(loggedTime < niceCreatedTime){
                alert(`${one.niceEngineerName}さんからいいねが届きました!`);
            }else{
            }
            console.log(1);
    });
})





document.addEventListener('DOMContentLoaded',niceBothNiceModal());
