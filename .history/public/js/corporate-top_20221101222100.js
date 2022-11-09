console.log(1);


async function niceModal(){

    const url='http://127.0.0.1:8000/nice/';

    const response=await fetch(url);
    const data=await response.json();
    console.log(data);
    console.log(data.logged);
    console.log(data.niceCreatedList);


    data.niceCreatedList.forEach((niceCreated)=>{
        if(data.logged<niceCreated){
            console.log('取れた');
        }else{
            console.log('わん');
        }
    })


/*
    'logged'=>$logged,
    'niceCreatedList'=>$niceCreatedList,
*/

}

document.addEventListener('DOMContentLoaded',niceModal());
