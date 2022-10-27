<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>企業名</p><br>
                   @foreach ($both_nices as $both_nice)
                   <p>{{$both_nice->name}}</p>

                   @endforeach
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>選考段階</p>
                 </div>
                 <div class="p-6 bg-white border-b border-gray-200">
                    <p>メッセージ</p>
                    @foreach ($messages as $message)
                    <p>{{$message->content}}</p>
                        @if($message->type=="企業")
                        {{$message->both_nice->name}}
                        @else
                        {{$message->both_nice->engineer_name}}
                        @endif
                        <br>
                    @endforeach
                    <form action="{{route('engineer.selection-create')}}" method="POST">
                        @csrf
                    <textarea name="content" id="content" cols="120" rows="10" placeholder="メッセージをご入力ください"></textarea>
                    <button type="submit">送信</button>
                </form>
                 </div>
            </div>
        </div>
    </div>
</x-app-layout>
