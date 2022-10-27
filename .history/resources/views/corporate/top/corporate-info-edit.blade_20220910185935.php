<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>求人情報編集</p><br><br>
                    現在<br><br>
                    創業年月：{{$corporate_info->founded}}<br><br>
                    本社-都市：{{$corporate_info->headquarters_city}}<br><br>
                    シリーズ：{{$corporate_info->series}}<br><br>
                    ミッション-タイトル：{{$corporate_info->mission_title}}<br><br>
                    ミッション-内容：{{$corporate_info->mission_content}}<br><br>
                    プロダクト名：{{$corporate_info->prodcut_name}}<br><br>
                    プロダクト内容：{{$corporate_info->product_content}}<br><br>
                    タグ：{{$corporate_info->tag}}<br><br>
                    画像：{{$corporate_info->image}}<br><br>


                    <h1>開発環境</h1><br>
                    開発言語：{{$corporate_info->development_language}}<br><br>
                    フレームワーク：{{$corporate_info->development_framework}}<br><br>
                    データベース：{{$corporate_info->development_database}}<br><br>
                    インフラ：{{$corporate_info->development_infra}}<br><br>
                    OS：{{$corporate_info->development_os}}<br><br><br><br><br><br>

                    新しい情報<br><br>
                     <form action="{{route('corporate.corporate-info-update')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="id" value="{{$corporate_info->id}}">
                        創業年月：<input type="date" name="founded" value="{{ old('founded',$corporate_info->founded)}}"><br><br>
                        本社 - 都市：<input type="text" name="headquarters_city"value="{{ old('headquarters_city',$corporate_info->headquarters_city)}}"><br><br>
                        画像：<input type="text" name="image" value="{{ old('image',$corporate_info->image)}}"><br><br>

                        シリーズ：<select name="series">
                         <option value="">選択してください</option>
                         <option value="シリーズA">シリーズA</option>
                         <option value="シリーズB">シリーズB</option>
                         <option value="シリーズC">シリーズC</option>
                         <option value="シリーズD">シリーズD</option>
                        </select><br><br>

                        ミッション - タイトル：<input type="text" name="mission_title" value="{{old('mission_title',$corporate_info->mission_title)}}" style="width:500px"><br><br>

                        ミッション - 本文：<input type="text" name="mission_content" value="{{ old('mission_content',$corporate_info->mission_content)}}" style="width:500px;height:100px"><br><br>
                        プロダクト名：<input type="text" name="product_name" value="{{ old('product_name',$corporate_info->product_name)}}" style="width:500px"><br><br>
                        プロダクト内容：<input type="text" name="product_content"value="{{ old('product_content',$corporate_info->product_content)}}" style="width:500px;height:100px"><br><br>


                        開発言語：<input type="checkbox" name="development_language" value="C"> C
                        <input type="checkbox" name="development_language" value="C++"> C++
                        <input type="checkbox" name="development_language" value="C#"> C#
                        <input type="checkbox" name="development_language" value="Java"> Java
                        <input type="checkbox" name="development_language" value="JavaScript"> JavaScript
                        <input type="checkbox" name="development_language" value="PHP"> PHP
                        <input type="checkbox" name="development_language" value="Ruby"> Ruby
                        <input type="checkbox" name="development_language" value="Python"> Python
                        <input type="checkbox" name="development_language" value="R"> R
                        <input type="checkbox" name="development_language" value="Go"> Go
                        <input type="checkbox" name="development_language" value="Swift"> Swift
                        <input type="checkbox" name="development_language" value="Kotlin"> Kotlin
                        <input type="checkbox" name="development_language" value="SQL"> SQL<br><br>

                        フレームワーク：<input type="checkbox" name="development_framework" value="Laravel"> Laravel
                        <input type="checkbox" name="development_framework" value="Ruby on Rails"> Ruby on Rails
                        <input type="checkbox" name="development_framework" value="React"> React
                        <input type="checkbox" name="development_framework" value="AngularJS"> AngularJS
                        <input type="checkbox" name="development_framework" value="jQuery"> jQuery
                        <input type="checkbox" name="development_framework" value="Flask"> Flask
                        <input type="checkbox" name="development_framework" value="Django"> Django
                        <input type="checkbox" name="development_framework" value="SpringFramework"> SpringFramework<br><br>

                        データベース：<input type="checkbox" name="development_database" value="MySQL"> MySQL
                        <input type="checkbox" name="development_database" value="PostgreSQL"> PostgreSQL
                        <input type="checkbox" name="development_database" value="SQLite"> SQLite
                        <input type="checkbox" name="development_database" value="Oracle Database"> Oracle Database
                        <input type="checkbox" name="development_database" value="NoSQL"> NoSQL<br><br>

                        インフラ：<input type="checkbox" name="development_infra" value="AWS"> AWS
                        <input type="checkbox" name="development_infra" value="GCP"> GCP
                        <input type="checkbox" name="development_infra" value="Azure"> Azure
                        <input type="checkbox" name="development_infra" value="Alibaba Cloud"> Alibaba Cloud
                        <input type="checkbox" name="development_infra" value="IBM Cloud"> IBM Cloud<br><br>

                        OS：<input type="checkbox" name="development_os" value="macOS"> mac
                        <input type="checkbox" name="development_os" value="Windows"> Windows
                        <input type="checkbox" name="development_os" value="Unix"> Unix
                        <input type="checkbox" name="development_os" value="Linux"> Linux<br><br>

                        タグ：<input type="checkbox" name="tag" value="多国籍"> 多国籍
                        <input type="checkbox" name="tag" value="農業"> 農業
                        <input type="checkbox" name="tag" value="宇宙"> 宇宙
                        <input type="checkbox" name="tag" value="医療"> 医療
                        <input type="checkbox" name="tag" value="オープンな社風"> オープンな社風
                        <input type="checkbox" name="tag" value="緻密な改善活動"> 緻密な改善活動
                        <input type="checkbox" name="tag" value="アジャイル"> アジャイル
                        <input type="checkbox" name="tag" value="研究開発"> 研究開発
                        <input type="checkbox" name="tag" value="最先端"> 最先端
                        <input type="checkbox" name="tag" value="技術志向"> 技術志向
                        <input type="checkbox" name="tag" value="顧客志向"> 顧客志向
                        <input type="checkbox" name="tag" value="上場"> 上場
                        <input type="checkbox" name="tag" value="未上場"> 未上場<br><br>

                        <input type="submit" value="編集する" style="background-color:#e5e7eb"><br><br>
                    </form>
                 </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
