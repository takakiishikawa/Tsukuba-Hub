<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>エンジニア情報編集</p><br><br>
                   現在：<br><br>
                   言語：{{$engineer_info->language}}<br><br>
                   年齢：{{$engineer_info->age}}<br><br>
                   住所：{{$engineer_info->address}}<br><br>
                   新しい情報：<br><br>
                   <form action="{{route('corporate.job-info-update')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$JobInfo->id}}">

                    職種：<select name="job_type">
                        <option value="">選択してください</option>
                        <option value="フロントエンドエンジニア">フロントエンドエンジニア</option>
                        <option value="バックエンドエンジニア">バックエンドエンジニア</option>
                        <option value="インフラエンジニア">インフラエンジニア</option>
                    </select><br><br>

                    役職：<select name="position">
                        <option value="">選択してください</option>
                        <option value="ジュニア">ジュニア</option>
                        <option value="ミドル">ミドル</option>
                        <option value="シニア">シニア</option>
                    </select><br><br>

                    仕事内容：<input type="text" name="job_description"><br><br>
                    <input type="submit" value="編集する"><br><br>
                </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
