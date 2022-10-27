<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>エンジニア名-タブ切り替え</p><br>
                   @foreach ($both_nices as $both_nice)
                   <p>{{$both_nice->engineer_name}}</p>

                   @endforeach
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>選考段階</p>
                 </div>
                 <div class="p-6 bg-white border-b border-gray-200">
                    <p>メッセージ機能</p>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
