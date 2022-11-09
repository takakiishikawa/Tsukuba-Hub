

async function jobTab(){
    const url='http://127.0.0.1:8000/job-tab';
    const response=await fetch(url);
    const data=await response.json();

    for(let i=0; i<data.job_infos.length;i++){
        const tabElm=document.createElement('span');
        tabElm.classList=(`tab${i}`);
        tabElm.innerHTML=`
        ${data.job_infos[i].recruitment_job}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`;
        tabElm.style.color="#a36fbd";
        tabElm.style.fontWeight="bold";
        tabElm.style.cursor="pointer";
        jobTabElm.appendChild(tabElm);
    }


    for(let i=0; i<data.job_infos.length;i++){
        const tabElm=document.querySelector(`.tab${i}`);
        console.log(tabElm);
        tabElm.addEventListener('click',()=>{
            const recruitmentPositionElm=document.querySelector('.recruitment_position');
            console.log(recruitmentPositionElm);
            recruitmentPositionElm.innerHTML=data.job_infos[i].recruitment_position;

            console.log("wan");
        });
    }

}

const jobTabElm=document.querySelector('.jobTab');
document.addEventListener('DOMContentLoaded',jobTab());


