<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="selectionTab" style=text-align:center>

                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <label style ="text-align:center">エンジニア名</label>
                   <span class="engineer_name">{{$both_nice->engineer_name}}</span>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <p style ="text-align:center" class="selection_stage">選考段階：{{$both_nice->selection_stage->selection_stage}}</p>
                 </div>
                 <div class="p-6 bg-white border-b border-gray-200">
                    <p style ="text-align:center">メッセージ</p><br><br>
                    @foreach($messages as $message)
                        @if($message->type=="企業")
                        <p style="text-align:right">{{$message->message_content}}<br>
                        {{$both_nice->name}}</p><br>
                        @else
                        <p style="text-align:left">{{$message->message_content}}<br>
                        {{$both_nice->engineer_name}}</p>
                        @endif
                    @endforeach
                        <br><br>
                    <form action="{{route('corporate.selection-message')}}" method="POST">
                    @csrf
                    <textarea name="message_content" id="message_content" cols="135" rows="5" placeholder="メッセージをご入力ください"></textarea>
                    <button type="submit" >送信</button>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="../../../js/selection.js"></script>
