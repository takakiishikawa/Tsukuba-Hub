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

            let ageResult=document.querySelector('#ageResult');
            ageResult.innerHTML=`
            想定検索結果&emsp;${data.count}名
            `;
        }
        let ageElm=document.querySelector('#age');

        ageElm.addEventListener('change',searchResult);


        //画像結果表示(all)
        /*
        async function searchConditionChange(){




            //checked済valueのjsonデータを持ってくる
            const url='http://127.0.0.1:8000/api/result/';
            const response=await fetch(url);
            const data=await response.json();

            //連想配列をforなどで取り出して表示

        }
        */
        let searchCheckedElm1=document.querySelectorAll('[name="keyword1"]');
        console.log(searchCheckedElm1.length);

        if( 0 < searchCheckedElm1.length ) {

            for(let checked_data of searchCheckedElm1) {

                checked_data.addEventListener('change', () => {
                    get_checked();
                });
            }
        }
        let get_checked =function (e)  {

            let inputs = document.querySelectorAll("input:checked");

            for(let checked_data of inputs) {
                console.log(checked_data.value); // 選択されたチェックボックスのvalue属性を出力する
            }
        }


        /*
        const searchChangedElms2=document.querySelectorAll('[name="keyword4"]');
        searchResult2();

        function searchResult2(){
            searchChangedElms2.forEach(function(searchChangedElm2){
                searchChangedElm2.addEventListener('change',()=>{
                    const multiCheckedElm=document.querySelectorAll('input:checked');
                    multiCheckedElm.forEach((checkedElm)=>{
                        const url='http://127.0.0.1:8000/api/Result/';

                        const obj={'keyword4':checkedElm.value};
                        const yyy={
                            method:'POST',
                            body:obj
                        };

                        console.log(url);
                        console.log(yyy);
                    });
                });
            }
        )};
        */

        async function xxx(){
            const obj={hello:'world'};

            const response=await fetch('http://127.0.0.1:8000/api/Result/',{
                method:'POST',
                body:obj,
            });
            if(response.ok){
                console.log('good');
            };
        }
        xxx();

        /*
        const response = await fetch("http://xxx.com/post", {
  method: "POST",   // GET POST PUT DELETEなど
  body: bodyData    // リクエスト本文をセット
});



        const data={
            method:'POST',
            body:obj,
        };

        async function xxx(){
            const response=await
        }
*/







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


