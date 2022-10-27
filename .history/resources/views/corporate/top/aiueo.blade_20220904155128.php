<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   @foreach($nices as $nice)
                   言語：{{$nice->user_id}}<br><br>
                   年齢：{{$nice->name}}<br><br>
                   住所：{{$nice->engineer_name}}<br><br>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
