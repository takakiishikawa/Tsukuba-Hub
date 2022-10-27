<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>求人情報編集</p><br><br>
                   現在：<br>
                   職種：{{$JobInfo->job_type}}<br><br>
                   役職：{{$JobInfo->position}}<br><br>
                   仕事内容：{{$JobInfo->job_description}}<br><br><br>
                   新しい情報：<br>
                   <form action="{{route('corporate.job-info-update')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$JobInfo->id}}">
                    職種：<input type="text" name="job_type"><br><br>
                    役職：<input type="text" name="position"><br><br>
                    仕事内容：<input type="text" name="job_description"><br><br>
                    <input type="submit" value="編集する">
                </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
