<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>エンジニア情報</p><br>
                   @if(count($engineer_info)==0)
                   <a href="{{route('engineer.engineer-info-register')}}" style="background-color:#e5e7eb">エンジニア情報を新規登録する</a><br><br>
                   @endif
                   @foreach($engineer_info as $engineer_info)
                   年齢：{{$engineer_info->age}}<br><br>
                   住所 - 都市名：{{$engineer_info->address_city}}<br><br>
                   希望職種：{{$engineer_info->objective}}<br><br>
                   経験職種：{{$engineer_info->work_experience}}<br><br>
                   経験職種 - 年数：{{$engineer_info->work_experience_year}}<br><br>
                   開発言語：{{$engineer_info->development_language}}<br><br>
                   フレームワーク：{{$engineer_info->development_framework}}<br><br>
                   データベース：{{$engineer_info->development_database}}<br><br>
                   インフラ：{{$engineer_info->development_infra}}<br><br>
                   OS：{{$engineer_info->development_os}}<br><br>
                   期待：{{$engineer_info->expectation}}<br><br>
                   強み：{{$engineer_info->strength}}<br><br>
                   関心：{{$engineer_info->interst}}<br><br>
                   PR動画：{{$engineer_info->video}}<br><br>
                    <img src="{{asset($engineer_info->path)}}"><br><br>

                   <a href="{{route('engineer.engineer-info-edit',['id'=>$engineer_info->id])}}" style="background-color:#e5e7eb">編集する</a>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
