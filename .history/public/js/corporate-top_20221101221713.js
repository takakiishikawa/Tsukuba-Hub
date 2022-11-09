console.log(1);


async function niceModal(){

    const url='http://127.0.0.1:8000/nice/';

    const response=await fetch(url);
    const date=await response.json();
    console.log(data.logged);


/*
    'logged'=>$logged,
    'niceCreatedList'=>$niceCreatedList,
*/

}

document.addEventListener('DOMContentLoaded',niceModal());
