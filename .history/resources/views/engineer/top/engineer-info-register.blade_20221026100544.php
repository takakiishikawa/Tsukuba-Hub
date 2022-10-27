<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>エンジニア情報登録</p><br>
                   <form action="{{route('engineer.engineer-info-create')}}" method="POST" enctype="multipart/form-data">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">

                   希望職種：<input type="checkbox" name="objective" value="フロントエンドエンジニア"> フロントエンドエンジニア
                   <input type="checkbox" name="objective" value="バックエンドエンジニア"> バックエンドエンジニア
                   <input type="checkbox" name="objective" value="スマホアプリエンジニア"> スマホアプリエンジニア
                   <input type="checkbox" name="objective" value="インフラエンジニア"> インフラエンジニア
                   <input type="checkbox" name="objective" value="データエンジニア"> データエンジニア
                   <input type="checkbox" name="objective" value="データサイエンティスト"> データサイエンティスト
                   <input type="checkbox" name="objective" value="IoTエンジニア"> IoTエンジニア
                   <input type="checkbox" name="objective" value="AIエンジニア"> AIエンジニア
                   <input type="checkbox" name="objective" value="ITアーキテクト"> ITアーキテクト<br><br>

                   経験職種：<input type="checkbox" name="work_experience" value="フロントエンドエンジニア"> フロントエンドエンジニア
                   <input type="checkbox" name="work_experience" value="バックエンドエンジニア"> バックエンドエンジニア
                   <input type="checkbox" name="work_experience" value="スマホアプリエンジニア"> スマホアプリエンジニア
                   <input type="checkbox" name="work_experience" value="インフラエンジニア"> インフラエンジニア
                   <input type="checkbox" name="work_experience" value="データエンジニア"> データエンジニア
                   <input type="checkbox" name="work_experience" value="データサイエンティスト"> データサイエンティスト
                   <input type="checkbox" name="work_experience" value="IoTエンジニア"> IoTエンジニア
                   <input type="checkbox" name="work_experience" value="AIエンジニア"> AIエンジニア
                   <input type="checkbox" name="work_experience" value="ITアーキテクト"> ITアーキテクト<br><br>

                   経験職種 - 年数：<input type="number" name="work_experience_year"><br><br>
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

                   OS：<input type="checkbox" name="development_os" value="mac"> mac
                   <input type="checkbox" name="development_os" value="Windows"> Windows
                   <input type="checkbox" name="development_os" value="Unix"> Unix
                   <input type="checkbox" name="development_os" value="Linux"> Linux<br><br>

                   期待：<input type="checkbox" name="expectation" value="最先端な技術環境">最先端な技術環境
                   <input type="checkbox" name="expectation" value="モダンな開発環境">モダンな開発環境
                   <input type="checkbox" name="expectation" value="チーム内での信頼関係">チーム内での信頼関係
                   <input type="checkbox" name="expectation" value="健全な顧客志向">健全な顧客志向
                   <input type="checkbox" name="expectation" value="開発の速度">開発の速度
                   <input type="checkbox" name="expectation" value="改善のきめ細やかさ">改善のきめ細やかさ
                   <input type="checkbox" name="expectation" value="優秀な同僚">優秀な同僚
                   <input type="checkbox" name="expectation" value="多国籍な環境">多国籍な環境
                   <input type="checkbox" name="expectation" value="気持ちの良い同僚">気持ちの良い同僚
                   <input type="checkbox" name="expectation" value="新規機能の開発">新規機能の開発<br><br>

                   強み：<input type="checkbox" name="strength" value="論理的思考力">論理的思考力
                   <input type="checkbox" name="strength" value="具体⇄抽象の横断">具体⇄抽象の横断
                   <input type="checkbox" name="strength" value="思考スピード">思考スピード
                   <input type="checkbox" name="strength" value="一つのことを考え続ける力">一つのことを考え続ける力
                   <input type="checkbox" name="strength" value="楽観的な態度">楽観的な態度
                   <input type="checkbox" name="strength" value="自分を信じる力">自分を信じる力
                   <input type="checkbox" name="strength" value="他自然言語の習得速度">他自然言語の習得速度
                   <input type="checkbox" name="strength" value="他者への興味関心">他者への興味関心
                   <input type="checkbox" name="strength" value="技術への高い好奇心">技術への高い好奇心
                   <input type="checkbox" name="strength" value="高度な実装力">高度な実装力
                   <input type="checkbox" name="strength" value="人間理解">人間理解<br><br>

                   関心：<input type="checkbox" name="interest" value="WEB">WEB
                   <input type="checkbox" name="interest" value="スマホアプリ開発">スマホアプリ開発
                   <input type="checkbox" name="interest" value="データベース">データベース
                   <input type="checkbox" name="interest" value="API">API
                   <input type="checkbox" name="interest" value="ミドルウェア開発">ミドルウェア開発
                   <input type="checkbox" name="interest" value="組み込み開発">組み込み開発
                   <input type="checkbox" name="interest" value="セキュリティ">セキュリティ
                   <input type="checkbox" name="interest" value="データサイエンス">データサイエンス
                   <input type="checkbox" name="interest" value="機械学習/AI">機械学習/AI
                   <input type="checkbox" name="interest" value="自然言語処理">自然言語処理
                   <input type="checkbox" name="interest" value="大規模開発">大規模開発<br><br>

                   年齢：<input type="number" name="age"><br><br>
                   住所 - 都市名：<input type="text" name="address_city"><br><br>
                   PR動画：<input type="text" name="video"><br><br>
                   プロフィール画像：<input type="file" name="image"><br><br>


                   <input type="submit" value="登録する" style="background-color:#e5e7eb">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
