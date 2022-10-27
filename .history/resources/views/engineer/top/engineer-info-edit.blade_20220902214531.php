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
                   <form action="{{route('engineer.engineer-info-update')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name='id' value="{{$engineer_info->id}}">

                    言語：<select name="language">
                        <option value="">選択してください</option>
                        <option value="PHP">PHP</option>
                        <option value="Java">Java</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="Go">Go</option>
                       </select><br><br>
                       年齢：<input type="text" name="age"><br><br>
                       住所：<select name="address">
                        <option value="">選択してください</option>
                        <option value="つくば市小田">つくば市小田</option>
                        <option value="つくば市北条">つくば市北条</option>
                        <option value="つくば市研究学園">つくば市研究学園</option>
                       </select><br><br>

                    <input type="submit" value="編集する"><br><br>
                </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
