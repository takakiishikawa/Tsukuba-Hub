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

        ageElm.addEventListener('change',searchResult);



        //画像拡大表示



        const xxx=document.querySelectorAll('.xxx');
        console.log(xxx);

        xxx.forEach(function(yyy){
            console.log(yyy);
            const zzz=document.querySelector('.yyy .profImage')
            console.log(zzz);

        });



        /*
        const profModalWrappersElm=document.querySelectorAll('.profModalWrapper');
        const profModalImagesElm=document.querySelectorAll('.profModalImage');
        const profImagesElm=document.querySelectorAll('.profImage');

        console.log(profImagesElm);

        profImagesElm.forEach(function(profImageElm){
            profImageElm.addEventListener('click',()=>{
                console.log(profModalWrappersElm);
                profModalWrapperElm.classList.add('show');
                profModalImageElm.classList.add('show');

                const image=profImageElm.getAttribute('src');
                profModalImageElm.src=image;
                console.log(profModalWrapperElm);
            });
        });
        */



