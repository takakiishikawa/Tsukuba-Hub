//いいね受信時マッチング受信時にモーダル表示
async function niceBothNiceModal(){
    const url='http://127.0.0.1:8000/nice-modal/';

    const response=await fetch(url);
    const data=await response.json();

    modal(data.niceCreatedList,data.logged);
    modal(data.bothNiceCreatedList,data.logged);

    //ここにfetch(url,,{method:get})を実行して、php側でDBを更新?分かりづらい..
}

const modal=(($list,$logged)=>{
    $list.forEach((one)=>{
        const loggedTime=Date.parse($logged);
        const niceCreatedTime=Date.parse(one.niceCreated);
        const bothNiceCreatedTime=Date.parse(one.bothNiceCreated);

            if(loggedTime < niceCreatedTime){
                alert(`${one.niceEngineerName}さんからいいねが届きました!`);
            }else if(loggedTime < bothNiceCreatedTime){
                alert(`${one.bothNiceEngineerName}さんとマッチングしました!`);
            }
            console.log(niceCreatedTime);
    });
});

document.addEventListener('DOMContentLoaded',()=>{
    setInterval(niceBothNiceModal,3000);
});


//最新3recordを一定間隔で表示
async function timeLine(){
    console.log(1);

    const url='http://127.0.0.1:8000/time-line';

    const response=await fetch(url);
    const data=await response.json();
    console.log(data);

    data.forEach((bothNiceRecord)=>{
        console.log(bothNiceRecord);

    });


}

document.addEventListener('DOMContentLoaded',timeLine());
