async function niceBothNicemodal(){

    const url='http://127.0.0.1:8000/nice/';

    const response=await fetch(url);
    const data=await response.json();


    this.modal(data.createList,data.logged);

    data.niceCreatedList.forEach((niceCreatedOne)=>{


}

const modal=(($list,$logged)=>{

    $list.forEach((one)=>{
        const loggedTime=Date.parse($logged);
        const niceCreatedTime=Date.parse(one.niceCreated);
            if(loggedTime < niceCreatedTime){
                alert(`${one.niceEngineerName}さんからいいねが届きました!`);
            }else{
            }
        });
}




document.addEventListener('DOMContentLoaded',niceBothNicemodal());
