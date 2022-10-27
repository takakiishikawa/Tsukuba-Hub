<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>求人情報登録</p><br>
                   <form action="{{route('corporate.job-info-create')}}" method="POST">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    職種：<select name="job_type">
                        <option value="フロントエンドエンジニア">フロントエンドエンジニア</option>
                        <option value="バックエンドエンジニア">バックエンドエンジニア</option>
                        <option value="インフラエンジニア">インフラエンジニア</option>
                    </select><br><br>

                    役職：<select name="job_type">
                        <option value="ジュニア">ジュニア</option>
                        <option value="ミドル">ミドル</option>
                        <option value="シニア">シニア</option>
                    </select><br><br>

                    仕事内容：<input type="text" name="job_description"><br><br>
                    <input type="submit" value="送信">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
