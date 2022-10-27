<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>選考フロー編集</p><br><br>
                   <h1>いいね→{{$SelectionFlow->casual_interview}}→{{$SelectionFlow->interview}}→採用</h1>
                   <br><br><br>
                   <form action="{{route('corporate.selection-flow-update')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$SelectionFlow->id}}">

                    面談：<select name="casual_interview">
                        <option value="">選択してください</option>
                        <option value="実施する">実施する</option>
                        <option value="実施しない">実施しない</option>
                       </select><br><br>

                       面談回数：<select name="casual_interview_times">
                        <option value="">選択してください</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                       </select><br><br>

                       面接：<select name="interview">
                        <option value="">選択してください</option>
                        <option value="実施する">実施する</option>
                        <option value="実施しない">実施しない</option>
                       </select><br><br>

                       面接回数：<select name="interview_times">
                        <option value="">選択してください</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                       </select><br><br>

                    <input type="submit" value="編集する">
                </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
