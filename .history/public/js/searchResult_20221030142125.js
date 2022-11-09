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





        const searchChangedElms2=document.querySelectorAll('[name="keyword4"] [name="keyword2"]');
        searchResult2();

        function searchResult2(){
            searchChangedElms2.forEach(function(searchChangedElm2){
                searchChangedElm2.addEventListener('change',()=>{
                    const multiCheckedElm=document.querySelectorAll('input:checked');
                    multiCheckedElm.forEach((checkedElm)=>{

                        xxx(checkedElm.name,checkedElm.value);
                    });
                });
            });
        }


        async function xxx(name,value){
            const obj={
                keyword:name,
                value:value
            };
            console.log(obj);
            const url='http://127.0.0.1:8000/api/';

            const response=await fetch(url,{
                method:'POST',
                headers:{
                    'Content-Type':'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
                body:JSON.stringify(obj),
            });
            const data=await response.json();
            console.log(data);


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


