<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>求人情報編集</p><br><br>
                   現在の情報：<br>
                   {{$JobInfo->job_type}}<br><br>
                   {{$JobInfo->position}}<br><br>
                   {{$JobInfo->job_description}}<br><br>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
