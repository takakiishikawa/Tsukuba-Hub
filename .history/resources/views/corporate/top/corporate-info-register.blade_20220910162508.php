<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>企業情報登録</p><br>
                   <form action="{{route('corporate.corporate-info-create')}}" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
                   ミッション - タイトル：<input type="text" name="mission_title"><br><br>
                   ミッション - 本文：<input type="text" name="mission_content"><br><br>
                   プロダクト名：<input type="text" name="product_name"><br><br>
                   プロダクト内容：<input type="text" name="product_content"><br><br>

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
                   <input type="checkbox" name="development_infra" value="IBM Cloud"> IBM Cloud

                   インフラ：<input type="checkbox" name="development_os" value="macOS"> macOS
                   <input type="checkbox" name="development_os" value="Windows"> Windows
                   <input type="checkbox" name="development_os" value="Unix"> Unix
                   <input type="checkbox" name="development_os" value="Linux"> Linux

                   　　　





                   シリーズ：<select name="series">
                    <option value="">選択してください</option>
                    <option value="シリーズA">シリーズA</option>
                    <option value="シリーズB">シリーズB</option>
                    <option value="シリーズC">シリーズC</option>
                    <option value="シリーズD">シリーズD</option>
                   </select><br><br>

                   タグ：<select name="tag">
                    <option value="">選択してください</option>
                    <option value="筑波創業">筑波創業</option>
                    <option value="多国籍エンジニア在籍">多国籍</option>
                    <option value="農業">農業</option>
                    <option value="医療">医療</option>
                    <option value="宇宙">宇宙</option>
                   </select><br><br>






                   '',
                   '',
                   '',
                   '',
                   'series',
                   'tag',
                   'founded',
                   'headquarters_city',
                   'image',



                   <input type="submit" value="登録する">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
