<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>エンジニア情報編集</p><br><br>
                   <form action="{{route('engineer.engineer-info-update')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name='id' value="{{$engineer_info->id}}">
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

                    OS：<input type="checkbox" name="development_os" value="macOS"> mac
                    <input type="checkbox" name="development_os" value="Windows"> Windows
                    <input type="checkbox" name="development_os" value="Unix"> Unix
                    <input type="checkbox" name="development_os" value="Linux"> Linux<br><br>

                    期待：<input type="checkbox" name="expectation">最先端な技術環境
                    <input type="checkbox" name="expectation">モダンな開発環境
                    <input type="checkbox" name="expectation">チーム内での信頼関係
                    <input type="checkbox" name="expectation">健全な顧客志向
                    <input type="checkbox" name="expectation">開発の速度
                    <input type="checkbox" name="expectation">改善のきめ細やかさ
                    <input type="checkbox" name="expectation">優秀な同僚
                    <input type="checkbox" name="expectation">多国籍な環境
                    <input type="checkbox" name="expectation">気持ちの良い同僚
                    <input type="checkbox" name="expectation">新規機能の開発<br><br>

                    強み：<input type="checkbox" name="strength">論理的思考力
                    <input type="checkbox" name="strength">具体⇄抽象の横断
                    <input type="checkbox" name="strength">思考スピード
                    <input type="checkbox" name="strength">一つのことを考え続ける力
                    <input type="checkbox" name="strength">楽観的な態度
                    <input type="checkbox" name="strength">自分を信じる力
                    <input type="checkbox" name="strength">他自然言語の習得速度
                    <input type="checkbox" name="strength">他者への興味関心
                    <input type="checkbox" name="strength">技術への高い好奇心
                    <input type="checkbox" name="strength">高度な実装力
                    <input type="checkbox" name="strength">人間理解<br><br>

                    関心：<input type="checkbox" name="interest">WEB
                    <input type="checkbox" name="interest">スマホアプリ開発
                    <input type="checkbox" name="interest">データベース
                    <input type="checkbox" name="interest">API
                    <input type="checkbox" name="interest">ミドルウェア開発
                    <input type="checkbox" name="interest">組み込み開発
                    <input type="checkbox" name="interest">セキュリティ
                    <input type="checkbox" name="interest">データサイエンス
                    <input type="checkbox" name="interest">機械学習/AI
                    <input type="checkbox" name="interest">自然言語処理
                    <input type="checkbox" name="interest">大規模開発<br><br>

                    年齢：<input type="number" name="age"><br><br>
                    住所 - 都市名：<input type="text" name="address_city"><br><br>
                    PR動画：<input type="text" name="video"><br><br>
                    プロフィール画像：<input type="text" name="image"><br><br>

                    <input type="submit" value="編集する"><br><br>
                </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
