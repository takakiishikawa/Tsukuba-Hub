

async function jobTab(){
    const url='http://127.0.0.1:8000/job-tab';
    console.log(1);

    const response=await fetch(url);

    const data=await response.json();

    console.log(data.job_infos[0].recruitment_job);


}


document.addEventListener('DOMContentLoaded',jobTab());
