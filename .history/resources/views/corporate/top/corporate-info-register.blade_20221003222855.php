<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>企業情報登録</p><br>
                   <form action="{{route('corporate.corporate-info-create')}}" method="POST" enctype="multipart/form-data">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                   創業年月：<input type="date" name="founded"><br><br>
                   本社 - 都市：<input type="text" name="headquarters_city"><br><br>
                   シリーズ：<select name="series">
                    <option value="">選択してください</option>
                    <option value="シリーズA">シリーズA</option>
                    <option value="シリーズB">シリーズB</option>
                    <option value="シリーズC">シリーズC</option>
                    <option value="シリーズD">シリーズD</option>
                   </select><br><br>

                   ミッション - タイトル：<input type="text" name="mission_title" style="width:500px"><br><br>
                   ミッション - 本文：<input type="text" name="mission_content" style="width:500px;height:100px"><br><br>
                   プロダクト名：<input type="text" name="product_name" style="width:500px"><br><br>
                   プロダクト内容：<input type="text" name="product_content" style="width:500px;height:100px"><br><br>

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
                   <!--プロフィール画像：<input type="text" name="image"><br><br>-->

                   画像：<input type="file" name="file"><br><br>


                   <input type="submit" value="登録する" style="background-color:#e5e7eb">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
