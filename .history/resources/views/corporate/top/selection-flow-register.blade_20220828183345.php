<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p>選考フロー登録</p><br>
                   <form action="{{route('corporate.selection-flow-create')}}" method="POST">
                   <input type="hidden" name="_token" value="{{csrf_token()}}">
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

                   <input type="submit" value="登録する">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
