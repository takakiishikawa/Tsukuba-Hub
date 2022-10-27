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
                   面談：<input type="text" name="interview"><br><br>
                   面談回数：<input type="text" name="interview_times"><br><br>
                   面接：<input type="text" name="casual_interview"><br><br>
                   面接回数：<input type="text" name="casual_interview_times"><br><br>
                   <input type="submit" value="登録する">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
