<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>選考フロー</p><br><br>
                   <h1>いいね→</h1>
                   @foreach ($SelectionFlows as $SelectionFlow)
                   <h1>いいね→</h1>
                   <h1>{{$SelectionFlow->casual_interview}}→</h1>
                   <h1>{{$SelectionFlow->interview}}→</h1>
                   <h1>採用</h1>
                   <br>
                   @endforeach<br><br>
                   <a href="{{route('corporate.selection-flow-register')}}">新規登録をする</a>

                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>ダッシュボード</p>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
