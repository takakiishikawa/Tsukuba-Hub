<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>ダッシュボード</p><br>
                    <p>送ったいいね数：{{$nices->count()}}</p><br>
                    <p>受け取ったいいね数：{{$niceds->count()}}</p><br>
                    <p>マッチング数：{{$both_nices->count()}}</p><br>

                    <p>追加予定</p>


                 </div>

            </div>
        </div>
    </div>

    <script src="../../../js/corporate-top.js"></script>
</x-app-layout>
