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
            '[name="keyword1"],[name="keyword2"],[name="keyword3"],[name="keyword4"],[name="keyword5"],[name="keyword6"],[name="keyword7"],[name="keyword8"],[name="keyword9"],[name="keyword10"],[name="keyword11"],[name="keyword2"]');
        searchResult();


        function searchResult(){
            searchChangedElms.forEach(function(searchChangedElm){
                searchChangedElm.addEventListener('change',()=>{
                    const multiCheckedElm=document.querySelectorAll('input:checked');

                    xxx=Array.from(multiCheckedElm);

                    const searchCondition1=xxx.map((checkedElm)=>{
                        return{
                            'name':checkedElm.name,
                            'value':checkedElm.value
                        };
                    });

                    let searchCondition=[];
                    multiCheckedElm.forEach((checkedElm)=>{
                        searchCondition.push({
                            keyword:checkedElm.name,
                            value:checkedElm.value
                        });
                    });
                    send(searchCondition);
                    console.log(searchCondition);
                    console.log(searchCondition1);
                    console.log(Array.isArray(searchCondition));
                    console.log(Array.isArray(searchCondition1));
                });
            });
        }

        async function send(searchCondition1){
            const url='http://127.0.0.1:8000/api/';
            const response=await fetch(url,{
                method:'POST',
                headers:{
                    'Content-Type':'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
                body:JSON.stringify(searchCondition1),
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


