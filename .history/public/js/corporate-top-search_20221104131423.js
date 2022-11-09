//検索結果表示(all)
const searchChangedElms=document.querySelectorAll(
    '[name="keyword1"],[name="keyword2"],[name="keyword3"],[name="keyword4"],[name="keyword5"],[name="keyword6"],[name="keyword7"],[name="keyword8"],[name="keyword9"],[name="keyword10"],[name="keyword11"],[name="keyword12"]');
searchResult();


function searchResult(){
    searchChangedElms.forEach(function(searchChangedElm){
        let multiCheckedElm='';
        searchChangedElm.addEventListener('change',()=>{
            multiCheckedElm=document.querySelectorAll('input:checked');
            const multiCheckedElmArray=Array.from(multiCheckedElm);

            let searchCondition=[];
            searchCondition=multiCheckedElmArray.map((checkedElm)=>{
                return{
                    'keyword':checkedElm.name,
                    'value':checkedElm.value,
                };
            });
            send(searchCondition);
        });
    });
}

async function send(searchCondition){
    const url='http://127.0.0.1:8000/api/';
    const response=await fetch(url,{
        method:'POST',
        headers:{
            'Content-Type':'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body:JSON.stringify(searchCondition),
    });
    const data=await response.json();

    let result=document.querySelector('#result');
    console.log
    result.innerHTML=`
    (${data.count}名)
    `;
    result.style.color="#a36fbd";
    result.style.fontSize="17px";
    result.style.fontWeight="bold";
}



//画像拡大表示
const profGroupsElm=document.querySelectorAll('#profGroup');

profGroupsElm.forEach(function(profGroupElm){
    const profImageElm=profGroupElm.querySelector('.profImage');
    const profModalWrapperElm=profGroupElm.querySelector('.profModalWrapper');
    const profModalImageElm=profGroupElm.querySelector('.profModalImage');

    profImageElm.addEventListener('click',()=>{
        profModalWrapperElm.classList.add('show');
        profModalImageElm.classList.add('show');

        const image=profImageElm.getAttribute('src');
        profModalImageElm.src=image;
    });

    profModalWrapperElm.addEventListener('click',()=>{
        profModalWrapperElm.classList.remove('show');
        profModalImageElm.classList.remove('show');
    });
});



//Pagination

const paginationElm=document.querySelector('.pagination');

async function pagination(){
    const url='http://127.0.0.1:8000/engineer-infos/';

    const response=await fetch(url);
    const data=await response.json();

    const length=data.engineer_infos.length;
    let recordCount=3;
    let pageCount=1;

    for(let i=0; i<recordCount;i++){
        const contentElm=document.createElement('li');
        contentElm.innerHTML=i+1;
        paginationElm.before(contentElm);
        if(i===recordCount){
        }
    }

    const pageCountElm=document.createElement('li');
    pageCountElm.innerHTML=pageCount;
    paginationElm.appendChild(pageCountElm);
    console.log(3%recordCount===0);
    console.log(length);
    for(let i=0; i<length;i++){
        if((i+1)%recordCount===0){
            const pageCountElm=document.createElement('li');
            pageCount++;
            pageCountElm.innerHTML=pageCount;
            paginationElm.appendChild(pageCountElm);
        }
    }







}



document.addEventListener('DOMContentLoaded',pagination);



