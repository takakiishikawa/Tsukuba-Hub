<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>選考フロー</p><br><br>
                   @foreach ($SelectionFlows as $SelectionFlow)
                   <h1>いいね　→
                    @if($SelectionFlow->casual_interview == "実施する")
                    初回面談→
                    @endif
                    @if($SelectionFlow->casual_interview_times == "2")
                    面談(二人目)→
                    @elseif($SelectionFlow->casual_interview_times == "3")
                    面談(二人目)→面談(三人目)→
                    @endif
                    @if($SelectionFlow->interview=="実施する")
                    一次面接→
                    @endif
                    @if($SelectionFlow->interview_times == "2")
                    二次面接→
                    @elseif($SelectionFlow->interview_times == "3")
                    二次面接→三次面接→
                    @endif
                    内定</h1>
                   <br>

                   <a href="{{route('corporate.selection-flow-edit',['id'=>$SelectionFlow->id])}}">編集する</a>
                   @endforeach<br><br>
                   @if(count($SelectionFlows)==0);
                   <a href="{{route('corporate.selection-flow-register')}}">新規登録をする</a>
                   @endif
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>ダッシュボード</p>
                 </div>

            </div>
        </div>
    </div>

</x-app-layout>
