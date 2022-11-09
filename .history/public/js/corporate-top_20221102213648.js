async function niceBothNiceModal(){
    const url='http://127.0.0.1:8000/nice-modal/';

    const response=await fetch(url);
    const data=await response.json();

    modal(data.niceCreatedList,data.logged);
    modal(data.bothNiceCreatedList,data.logged);

    console.log(100);
}


const modal=(($list,$logged)=>{
    console.log(1234);
    $list.forEach((one)=>{
        const loggedTime=Date.parse($logged);
        const niceCreatedTime=Date.parse(one.niceCreated);
        const bothNiceCreatedTime=Date.parse(one.bothNiceCreated);

            if(loggedTime < niceCreatedTime){
                alert(`${one.niceEngineerName}さんからいいねが届きました!`);
            }else if(loggedTime < bothNiceCreatedTime){
                alert(`${one.bothNiceEngineerName}さんとマッチングしました!`);
            }
            console.log(123);
    });
});




document.addEventListener('DOMContentLoaded',()=>{
    setInterval(niceBothNiceModal,3000);
});
