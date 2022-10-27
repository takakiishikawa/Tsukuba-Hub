<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>選考フロー</p><br>
                   @foreach ($selection_flows as $selection_flow)
                   <h1>いいね  →
                    @if($selection_flow->casual_interview == "実施する")
                    初回面談  →
                    @endif
                    @if($selection_flow->casual_interview_times == "2")
                    面談(2人目)  →
                    @elseif($selection_flow->casual_interview_times == "3")
                    面談(2人目)  →  面談(3人目)  →
                    @endif
                    @if($selection_flow->interview=="実施する")
                    1次面接  →
                    @endif
                    @if($selection_flow->interview_times == "2")
                    2次面接  →
                    @elseif($selection_flow->interview_times == "3")
                    2次面接  →  3次面接  →
                    @endif
                    内定</h1>
                   <br>

                   <a href="{{route('corporate.selection-flow-edit',['id'=>$selection_flow->id])}}">編集する</a>

                   @endforeach<br><br>
                   @if(count($selection_flows)==0)
                   <a href="{{route('corporate.selection-flow-register')}}">新規登録をする</a>
                   @endif

                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>ダッシュボード</p><br>
                    <p>送ったいいね数：{{$nices->count()}}</p><br>
                    <p>受け取ったいいね数：{{$niceds->count()}}</p><br>
                    <p>マッチング数：</p><br>
                    <p>面談数：</p><br>
                    <p>採用数：</p><br>
                 </div>

            </div>
        </div>
    </div>

</x-app-layout>
