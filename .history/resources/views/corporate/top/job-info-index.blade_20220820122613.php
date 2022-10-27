<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>求人情報</p><br>
                   @foreach ($JobInfos as $JobInfo)
                   <li>
                        <div>{{$JobInfo->job_type}}</div><br><br>
                        <div>{{$JobInfo->position}}</div><br><br>
                        <div>{{$JobInfo->job_description}}</div><br><br>

                    </li><br><br>
                    @endforeach
                   <a href="{{route('corporate.job-info-register')}}">求人を新規登録する</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
