<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   @foreach($engineer_info as $engineer_info)
                   言語：{{$engineer_info->language}}<br><br>
                   年齢：{{$engineer_info->age}}<br><br>
                   住所：{{$engineer_info->address}}<br><br>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
