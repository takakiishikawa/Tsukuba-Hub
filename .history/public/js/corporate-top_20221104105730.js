//いいね受信時マッチング受信時にモーダル表示
async function niceBothNiceModal(){
    const url='http://127.0.0.1:8000/nice-modal/';

    const response=await fetch(url);
    const data=await response.json();

    modal(data.niceModalRecords);
    modal(data.bothNiceModalRecords);
}

const modal=(($list)=>{
    $list.forEach((one)=>{
            if(one.type){
                alert(`${one.engineer_name}さんからいいねが届きました!`);
            }else{
                alert(`${one.engineer_name}さんとマッチングしました!`);
            }
    });
});

document.addEventListener('DOMContentLoaded',niceBothNiceModal);

//最新3recordを一定間隔で表示
async function timeLine(){

    const url='http://127.0.0.1:8000/time-line';

    const response=await fetch(url);
    const data=await response.json();

    timeLineChange(data);

    setInterval(()=>{
        i++;
        if(i==data.timeLineRecords.length){
            i=0;
        }
        timeLineChange(data);
        timeLineDelete();
    },3000);
}

let i=0;
const timeLineParentElm=document.querySelector('.timeLine');
document.addEventListener('DOMContentLoaded',timeLine());

function timeLineChange(data){

    const timeLineElm=document.createElement('div');

    timeLineElm.classList.add('appear');
    timeLineElm.innerHTML=`
    ${data.timeLineRecords[i].name}&nbsp;×&nbsp;${data.timeLineRecords[i].engineer_name}さんがマッチングしました!
    `;
    timeLineElm.style.fontWeight="bold";
    timeLineElm.style.textAlign="center";
    timeLineElm.style.color="#a36fbd";
    timeLineParentElm.appendChild(timeLineElm);
}

function timeLineDelete(){
    const timeLineElm=document.querySelector('.appear');
    timeLineElm.remove();
}
