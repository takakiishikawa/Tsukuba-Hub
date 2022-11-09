<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <a href="{{route('corporate.job-info-register')}}" style="color:#a36fbd;font-weight:bold;cursor:pointer;">求人を新規登録する</a><br><br>

                   <div class="jobTab">

                   </div>


                   <li>
                        <div>募集役職：{{$job_info->recruitment_position}}</div><br>
                        <div>仕事内容：{{$job_info->job_content}}</div><br>
                        <div>配属先 - チーム名：{{$job_info->team_name}}</div><br>
                        <div>配属先 - チーム人数職種：{{$job_info->team_size}}</div><br>
                        <div>必須技術：{{$job_info->must_technology}}</div><br>
                        <div>歓迎技術：{{$job_info->better_technology}}</div><br>
                        <div>必須人物：{{$job_info->must_personality}}</div><br>
                        <div>歓迎人物：{{$job_info->better_personality}}</div><br>
                        <div>採用人数：{{$job_info->hire_number}}</div><br>
                        <div>年収：{{$job_info->annual_income}}</div><br>
                        <div>賞与回数：{{$job_info->bonus_number}}</div><br>
                        <div>賞与実績：{{$job_info->bonus_income}}</div><br>
                        <div>勤務地 - 都市名：{{$job_info->work_city}}</div><br>
                        <a href="{{route('corporate.job-info-edit',['id'=>$job_info->id])}}" style="color:#a36fbd;font-weight:bold;cursor:pointer;">編集する</a>
                    </li><br><br>

                </div>
            </div>
        </div>
    </div>
    <script src="../../../js/job-info-index.js"></script>
</x-app-layout>
