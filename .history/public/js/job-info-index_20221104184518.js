

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
            recruitmentPositionElm.innerHTML=data.job_infos[i].recruitment_position;
            const job_contentElm=document.querySelector('.job_content');
            job_contentElm.innerHTML=data.job_infos[i].job_content;
            const team_nameElm=document.querySelector('.team_name');
            team_nameElm.innerHTML=data.job_infos[i].team_name;
            const team_sizeElm=document.querySelector('.team_size');
            team_sizeElm.innerHTML=data.job_infos[i].team_size;
            const must_technologyElm=document.querySelector('.must_technology');
            must_technologyElm.innerHTML=data.job_infos[i].must_technology;
            const better_technologyElm=document.querySelector('.better_technology');
            better_technologyElm.innerHTML=data.job_infos[i].better_technology;
            const must_personalityElm=document.querySelector('.must_personality');
            must_personalityElm.innerHTML=data.job_infos[i].must_personality;
            const better_personalityElm=document.querySelector('.better_personality');
            better_personalityElm.innerHTML=data.job_infos[i].better_personality;
            const hire_numberElm=document.querySelector('.hire_number');
            hire_numberElm.innerHTML=data.job_infos[i].hire_number;
            const annual_incomeElm=document.querySelector('.annual_income');
            annual_incomeElm.innerHTML=data.job_infos[i].annual_income;
            const bonus_numberElm=document.querySelector('.bonus_number');
            bonus_numberElm.innerHTML=data.job_infos[i].bonus_number;
            const bonus_incomeElm=document.querySelector('.bonus_income');
            bonus_incomeElm.innerHTML=data.job_infos[i].bonus_income;
            const work_cityElm=document.querySelector('.bonus_work_city');
            work_cityElm.innerHTML=data.job_infos[i].bonus_work_city;
        });
    }

}

const jobTabElm=document.querySelector('.jobTab');
document.addEventListener('DOMContentLoaded',jobTab());


