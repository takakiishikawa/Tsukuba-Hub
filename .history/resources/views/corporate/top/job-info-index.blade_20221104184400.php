<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                   <div class="jobTab">

                   </div><br>
                        <div>募集役職：<span class="recruitment_position">{{$job_info->recruitment_position}}</span></div><br>
                        <div>仕事内容：<span class="job_content">{{$job_info->job_content}}</div><br>
                        <div>配属先 - チーム名：<span class="team_name">{{$job_info->team_name}}</div><br>
                        <div>配属先 - チーム人数職種：<span class="team_size"></span>{{$job_info->team_size}}</div><br>
                        <div>必須技術：<span class="must_technology">{{$job_info->must_technology}}</div><br>
                        <div>歓迎技術：<span class="better_technology">{{$job_info->better_technology}}</div><br>
                        <div>必須人物：<span class="must_personality">{{$job_info->must_personality}}</div><br>
                        <div>歓迎人物：<span class="better_personality">{{$job_info->better_personality}}</div><br>
                        <div>採用人数：<span class="hire_number">{{$job_info->hire_number}}</div><br>
                        <div>年収：<span class="annual_income">{{$job_info->annual_income}}</div><br>
                        <div>賞与回数：<span class="bonus_number">{{$job_info->bonus_number}}</div><br>
                        <div>賞与実績：<span class="bonus_income">{{$job_info->bonus_income}}</div><br>
                        <div>勤務地 - 都市名：<span class="work_city">{{$job_info->work_city}}</div><br>
                        <a href="{{route('corporate.job-info-edit',['id'=>$job_info->id])}}" style="color:#a36fbd;font-weight:bold;cursor:pointer;">編集する</a>
                    <br><br>
                    <a href="{{route('corporate.job-info-register')}}" style="color:#a36fbd;font-weight:bold;cursor:pointer;">求人を新規登録する</a><br><br>

                </div>
            </div>
        </div>
    </div>
    <script src="../../../js/job-info-index.js"></script>
</x-app-layout>
