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
        console.log(ageElm);

        ageElm.addEventListener('change',searchResult);



        //画像拡大表示
        const profModalWrappersElm=document.querySelectorAll('.profModalWrapper');
        const profModalImagesElm=document.querySelectorAll('.profModalImage');
        const profImagesElm=document.querySelectorAll('.profImage');
        const testsElm=document.querySelectorAll('#test');

        testsElm.forEach(function(test){
            console.log(test);
        });

        console.log(profModalWrapperElm);







