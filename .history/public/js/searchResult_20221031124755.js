        /*
        function searchResult(){
            let ageElm=document.querySelector('#age');
            age=ageElm.value;
            const url='http://127.0.0.1:8000/api/ageResult/'+age;
            fetch(url)
            .then(function(response){
                return response.json()
            .then(function(result){
                let ageResult=document.querySelector('#ageResult');
                ageResult.innerHTML=result.count;
            });
            })
        }
        ageElm.addEventListener('change',searchResult);
        */



        //検索結果表示
        async function searchResult(){
            age=ageElm.value;
            const url='http://127.0.0.1:8000/api/ageResult/'+age;

            const response=await fetch(url);
            const data=await response.json();
            console.log(data);

            let ageResult=document.querySelector('#ageResult');
            ageResult.innerHTML=`
            想定検索結果&emsp;${data.count}名
            `;
        }
        let ageElm=document.querySelector('#age');

        ageElm.addEventListener('change',searchResult);


        //画像結果表示(all)





        const searchChangedElms=document.querySelectorAll(
            '[name="keyword1"],[name="keyword2"],[name="keyword4"],[name="keyword5"],[name="keyword6"],[name="keyword7"],[name="keyword8"],[name="keyword9"],[name="keyword10"],[name="keyword11"]');
        searchResult();

        function searchResult(){
            searchChangedElms.forEach(function(searchChangedElm){
                searchChangedElm.addEventListener('change',()=>{
                    const multiCheckedElm=document.querySelectorAll('input:checked');


                    multiCheckedElm=Array.form(multiCheckedElm);
                    console.log(typeof multiCheckedElm);

                    const searchCondition1=multiCheckedElm.map.call(multiCheckedElm,(xxx)=>{
                        return{
                            'name':xxx.name,
                            'value':xxx.value
                        }
                    });


                    console.log(typeof searchCondition1);


                    let searchCondition=[];
                    multiCheckedElm.forEach((checkedElm)=>{
                        searchCondition.push({
                            name:checkedElm.name,
                            value:checkedElm.value
                        });
                    });
                    send(searchCondition1);

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
            result.innerHTML=`
            想定検索結果&emsp;${data.count}名
            `;
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


