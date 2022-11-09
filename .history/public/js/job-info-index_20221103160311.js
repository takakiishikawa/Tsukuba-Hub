

async function jobTab(){
    const url='http://127.0.0.1:8000/job-tab';

    const response=await fetch(url);
    const data=await response.json();
    console.log(1);

    console.log(data);


}

