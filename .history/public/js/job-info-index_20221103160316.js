

async function jobTab(){
    const url='http://127.0.0.1:8000/job-tab';

    const response=await fetch(url);
    console.log(1);

    const data=await response.json();

    console.log(data);


}

