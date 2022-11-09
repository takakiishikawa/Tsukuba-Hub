<head>
    <link rel="stylesheet" href="../../../css/search.css">
</head>
<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <p>検索機能</p><br>
                <div>
                    <form action="{{route('corporate.search',['id'=>1])}}" method="GET">
                        @csrf
                        希望職種：
                        <input type="checkbox" name="keyword1" value="フロントエンドエンジニア"> フロントエンドエンジニア
                        <input type="checkbox" name="keyword1" value="バックエンドエンジニア"> バックエンドエンジニア
                        <input type="checkbox" name="keyword1" value="スマホアプリエンジニア"> スマホアプリエンジニア
                        <input type="checkbox" name="keyword1" value="インフラエンジニア"> インフラエンジニア
                        <input type="checkbox" name="keyword1" value="データエンジニア"> データエンジニア
                        <input type="checkbox" name="keyword1" value="データサイエンティスト"> データサイエンティスト
                        <input type="checkbox" name="keyword1" value="IoTエンジニア"> IoTエンジニア
                        <input type="checkbox" name="keyword1" value="AIエンジニア"> AIエンジニア
                        <input type="checkbox" name="keyword1" value="ITアーキテクト"> ITアーキテクト<br><br>

                        経験職種：<input type="checkbox" name="keyword2" value="フロントエンドエンジニア"> フロントエンドエンジニア
                        <input type="checkbox" name="keyword2" value="バックエンドエンジニア"> バックエンドエンジニア
                        <input type="checkbox" name="keyword2" value="スマホアプリエンジニア"> スマホアプリエンジニア
                        <input type="checkbox" name="keyword2" value="インフラエンジニア"> インフラエンジニア
                        <input type="checkbox" name="keyword2" value="データエンジニア"> データエンジニア
                        <input type="checkbox" name="keyword2" value="データサイエンティスト"> データサイエンティスト
                        <input type="checkbox" name="keyword2" value="IoTエンジニア"> IoTエンジニア
                        <input type="checkbox" name="keyword2" value="AIエンジニア"> AIエンジニア
                        <input type="checkbox" name="keyword2" value="ITアーキテクト"> ITアーキテクト<br><br>

                        経験職種 - 年数：<input type="number" name="keyword3"><br><br>
                        開発言語：<input type="checkbox" name="keyword4" value="C"> C
                        <input type="checkbox" name="keyword4" value="C++"> C++
                        <input type="checkbox" name="keyword4" value="C#"> C#
                        <input type="checkbox" name="keyword4" value="Java"> Java
                        <input type="checkbox" name="keyword4" value="JavaScript"> JavaScript
                        <input type="checkbox" name="keyword4" value="PHP"> PHP
                        <input type="checkbox" name="keyword4" value="Ruby"> Ruby
                        <input type="checkbox" name="keyword4" value="Python"> Python
                        <input type="checkbox" name="keyword4" value="R"> R
                        <input type="checkbox" name="keyword4" value="Go"> Go
                        <input type="checkbox" name="keyword4" value="Swift"> Swift
                        <input type="checkbox" name="keyword4" value="Kotlin"> Kotlin
                        <input type="checkbox" name="keyword4" value="SQL"> SQL<br><br>

                        フレームワーク：<input type="checkbox" name="keyword5" value="Laravel"> Laravel
                        <input type="checkbox" name="keyword5" value="Ruby on Rails"> Ruby on Rails
                        <input type="checkbox" name="keyword5" value="React"> React
                        <input type="checkbox" name="keyword5" value="AngularJS"> AngularJS
                        <input type="checkbox" name="keyword5" value="jQuery"> jQuery
                        <input type="checkbox" name="keyword5" value="Flask"> Flask
                        <input type="checkbox" name="keyword5" value="Django"> Django
                        <input type="checkbox" name="keyword5" value="SpringFramework"> SpringFramework<br><br>

                        データベース：<input type="checkbox" name="keyword6" value="MySQL"> MySQL
                        <input type="checkbox" name="keyword6" value="PostgreSQL"> PostgreSQL
                        <input type="checkbox" name="keyword6" value="SQLite"> SQLite
                        <input type="checkbox" name="keyword6" value="Oracle Database"> Oracle Database
                        <input type="checkbox" name="keyword6" value="NoSQL"> NoSQL<br><br>
                        <p style=color:red;>注：まだここだけ</p>

                        インフラ：<input type="checkbox" name="keyword7" value="AWS" <?php if(@$_GET['keyword7']=='AWS') echo 'checked';?>>AWS
                        <input type="checkbox" name="keyword7" value="GCP" <?php if(@$_GET['keyword7']=='GCP') echo 'checked';?>> GCP
                        <input type="checkbox" name="keyword7" value="Azure" <?php if(@$_GET['keyword7']=='Azure') echo 'checked';?>> Azure
                        <input type="checkbox" name="keyword7" value="Alibaba Cloud" <?php if(@$_GET['keyword7']=='Alibaba Cloud') echo 'checked';?>> Alibaba Cloud
                        <input type="checkbox" name="keyword7" value="IBM Cloud" <?php if(@$_GET['keyword7']=='IBM Cloud') echo 'checked';?>> IBM Cloud<br><br>

                        OS：<input type="checkbox" name="keyword8" value="mac"> mac
                        <input type="checkbox" name="keyword8" value="Windows"> Windows
                        <input type="checkbox" name="keyword8" value="Unix"> Unix
                        <input type="checkbox" name="keyword8" value="Linux"> Linux<br><br>

                        期待：<input type="checkbox" name="keyword9" value="最先端な技術環境">最先端な技術環境
                        <input type="checkbox" name="keyword9" value="モダンな開発環境">モダンな開発環境
                        <input type="checkbox" name="keyword9" value="チーム内での信頼関係">チーム内での信頼関係
                        <input type="checkbox" name="keyword9" value="健全な顧客志向">健全な顧客志向
                        <input type="checkbox" name="keyword9" value="開発の速度">開発の速度
                        <input type="checkbox" name="keyword9" value="改善のきめ細やかさ">改善のきめ細やかさ
                        <input type="checkbox" name="keyword9" value="優秀な同僚">優秀な同僚
                        <input type="checkbox" name="keyword9" value="多国籍な環境">多国籍な環境
                        <input type="checkbox" name="keyword9" value="気持ちの良い同僚">気持ちの良い同僚
                        <input type="checkbox" name="keyword9" value="新規機能の開発">新規機能の開発<br><br>

                        強み：<input type="checkbox" name="keyword10" value="論理的思考力">論理的思考力
                        <input type="checkbox" name="keyword10" value="具体⇄抽象の横断">具体⇄抽象の横断
                        <input type="checkbox" name="keyword10" value="思考スピード">思考スピード
                        <input type="checkbox" name="keyword10" value="一つのことを考え続ける力">一つのことを考え続ける力
                        <input type="checkbox" name="keyword10" value="楽観的な態度">楽観的な態度
                        <input type="checkbox" name="keyword10" value="自分を信じる力">自分を信じる力
                        <input type="checkbox" name="keyword10" value="他自然言語の習得速度">他自然言語の習得速度
                        <input type="checkbox" name="keyword10" value="他者への興味関心">他者への興味関心
                        <input type="checkbox" name="keyword10" value="技術への高い好奇心">技術への高い好奇心
                        <input type="checkbox" name="keyword10" value="高度な実装力">高度な実装力
                        <input type="checkbox" name="keyword10" value="人間理解">人間理解<br><br>

                        <p style=color:red;>注：まだここだけ</p>
                        関心：<input type="checkbox" name="keyword11" value="WEB" <?php if(@$_GET['keyword11']=='WEB') echo 'checked';?>>WEB
                        <input type="checkbox" name="keyword11" value="スマホアプリ開発" <?php if(@$_GET['keyword11']=='スマホアプリ開発') echo 'checked';?>>スマホアプリ開発
                        <input type="checkbox" name="keyword11" value="データベース" <?php if(@$_GET['keyword11']=='データベース') echo 'checked';?>>データベース
                        <input type="checkbox" name="keyword11" value="API" <?php if(@$_GET['keyword11']=='API') echo 'checked';?>>API
                        <input type="checkbox" name="keyword11" value="ミドルウェア開発"  <?php if(@$_GET['keyword11']=='ミドルウェア開発') echo 'checked';?>>ミドルウェア開発
                        <input type="checkbox" name="keyword11" value="組み込み開発" <?php if(@$_GET['keyword11']=='組み込み開発') echo 'checked';?>>組み込み開発
                        <input type="checkbox" name="keyword11" value="セキュリティ" <?php if(@$_GET['keyword11']=='セキュリティ') echo 'checked';?>>セキュリティ
                        <input type="checkbox" name="keyword11" value="データサイエンス" <?php if(@$_GET['keyword11']=='データサイエンス') echo 'checked';?>>データサイエンス
                        <input type="checkbox" name="keyword11" value="機械学習/AI" <?php if(@$_GET['keyword11']=='機械学習/AI') echo 'checked';?>>機械学習/AI
                        <input type="checkbox" name="keyword11" value="自然言語処理" <?php if(@$_GET['keyword11']=='自然言語処理') echo 'checked';?>>自然言語処理
                        <input type="checkbox" name="keyword11" value="大規模開発" <?php if(@$_GET['keyword11']=='大規模開発') echo 'checked';?>>大規模開発<br><br>

                        年齢：<input type="number" name="keyword12" value="<?php echo @$_GET['keyword12']?>"><br><br>

                        キーワード検索：<input type="text" name="keyword13" value="<?php echo @$_GET['keyword13']?>"><br><br>

                        <input type="submit" value="この条件で検索する" style="color:#a36fbd;font-weight:bold;cursor:pointer;"><span id="result"></span>
                    </form>

                </div><br><br>
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="searchResult">検索結果　{{$searchResultCount}}名</h1><br>
                    <div class="sort">並び替え

                    </div>
                    <table>
                        <tr>
                            <th>画像</th>
                            <th>名前</th>
                            <th>login</th>
                            <th>職種</th>
                            <th>技術</th>
                            <th>強み等</th>
                            <th>いいね</th>
                            <th>詳細</th>
                        </tr>
                        @foreach ($engineer_infos as $engineer_info)
                        <tr>
                            <td id="profGroup">
                            <div class="profmodalWrapper">
                                <img src="" class="profModalImage">
                            </div>
                                <img src="{{asset($engineer_info->path)}}" class="profImage">
                            </td>
                            <td>
                                <?php
                                $created=$engineer_info->user->created_at;
                                $nowTimeStamp=strtotime('now');
                                $beforeOneWeekTimeStamp=strtotime('-1 week');
                                $createdTimeStamp=strtotime($created);
                                ?>
                                @if($createdTimeStamp>$beforeOneWeekTimeStamp)
                                <p style ="font-weight:bold;color:#a36fbd">NEW!</p>
                                @endif
                                {{$engineer_info->user->engineer_name}}<br>
                                <?php
                                $niceCount=0;
                                foreach($niceList as $niceNumber){
                                    if($niceNumber===$engineer_info->user_id){
                                        $niceCount++;
                                    }
                                }
                                ?>
                                {{$niceCount}}いいね&emsp;&emsp;<br>
                            </td>
                            <td>
                                <?php
                                $logged=$engineer_info->user->user_login->logged_at;
                                $nowTimeStamp=strtotime('now');
                                $beforeThreeDaysTimeStamp=strtotime('-3 days');
                                $beforeOneWeekTimeStamp=strtotime('-1 week');
                                $loggedTimeStamp=strtotime($logged);
                                ?>
                                @if($loggedTimeStamp>$beforeThreeDaysTimeStamp)
                                <img src="../../../img/threeDay.png" style="width:25px">
                                @elseif($loggedTimeStamp>$beforeOneWeekTimeStamp)
                                <img src="../../../img/oneWeek.png" style="width:25px">>
                                @else
                                <p>bad</p>
                                @endif
                            </td>
                            <td>
                                希望職種:{{$engineer_info->objective}}&emsp;&emsp;<br>
                                経験職種:{{$engineer_info->work_experience}}<br>
                                経験年数:{{$engineer_info->work_experience_year}}</td>
                            </td>
                            <td>
                                開発言語:{{$engineer_info->development_language}}<br>
                                フレームワーク:{{$engineer_info->development_framework}}&emsp;&emsp;<br>
                                データベース:{{$engineer_info->development_database}}<br>
                                インフラ:{{$engineer_info->development_infra}}<br>
                                OS:{{$engineer_info->development_os}}<br></td>

                            <td>
                                仕事に求めるもの:{{$engineer_info->expectation}}&emsp;&emsp;<br>
                                強み:{{$engineer_info->strength}}<br>
                                関心:{{$engineer_info->interest}}<br>
                            </td>
                            @if(in_array($engineer_info->user->engineer_name,$bothNiceList))
                            <td><a style="color:#a36fbd;font-weight:bold">マッチング中&emsp;&emsp;</a></td>
                            @elseif(array_key_exists( $engineer_info->user_id , $myNiceList ))
                            <td><a href="{{route('corporate.unnice',['id'=>$engineer_info->user_id])}}" style="color:#b9b9b9;font-weight:bold">いいね済&emsp;&emsp;</a></td>
                            @elseif(array_key_exists( $engineer_info->user_id , $nicedList ))
                            <td><a href="{{route('corporate.nice',['id'=>$engineer_info->user_id])}}" style="color:#b9b9b9;font-weight:bold">いいねあり！&emsp;&emsp;</a></td>
                            @else
                            <td><a href="{{route('corporate.nice',['id'=>$engineer_info->user_id])}}" style="color:#b9b9b9;font-weight:bold">いいね&emsp;&emsp;</a></td>
                            @endif
                            <td>詳細</td>
                        </tr>
                        @endforeach
                    </table><br><br>
                    <!--pagination*ソート*検索 -->
                    <div class="pagination">
                        <ul>
                    @foreach($pageCountList as $pageCountOne)
                            <li><a href="{{route('corporate.search',['id'=>$pageCountOne])}}">{{$pageCountOne}}&nbsp;&nbsp;&nbsp;</a></li>
                    @endforeach
                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <script src="../../../js/corporate-top-search.js">
    const data=@json($engineer_infos,JSON_PRETTY_PRINT);
    console.log(data);
</script>

</x-app-layout>