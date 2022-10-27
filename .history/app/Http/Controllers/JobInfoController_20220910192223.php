<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobInfo;
use Illuminate\Support\Facades\Auth;

class JobInfoController extends Controller
{

    public function index(Request $request){
        $user_id=Auth::user()->id;
        $job_infos=JobInfo::where('user_id',$user_id)->get();
        return view('corporate.top.job-info-index',['job_infos'=>$job_infos]);
    }

    public function register(){
        return view('corporate.top.job-info-register',[]);
    }

    public function create(Request $request){
        $user_id=Auth::user()->id;
        $recruitment_job=$request->input('recruitment_job');
        $recruitment_position=$request->input('recruitment_position');
        $job_content=$request->input('job_content');
        $team_name=$request->input('team_name');
        $team_size=$request->input('team_size');
        $must_technology=$request->input('must_technology');
        $better_technology=$request->input('better_technology');
        $must_personality=$request->input('must_personality');
        $better_personality=$request->input('better_personality');
        $hire_number=$request->input('hire_number');
        $annual_income=$request->input('annual_income');
        $bonus_number=$request->input('bonus_number');
        $bonus_income=$request->input('bonus_income');
        $work_city=$request->input('work_city');

        JobInfo::create([
            'user_id'=>$user_id,
            'recruitment_job'=>$recruitment_job,
            'recruitment_position'=>$recruitment_position,
            'job_content'=>$job_content,
            'team_name'=>$team_name,
            'team_size'=>$team_size,
            'must_technology'=>$must_technology,
            'better_technology'=>$better_technology,
            'must_personality'=>$must_personality,
            'better_personality'=>$better_personality,
            'hire_number'=>$hire_number,
            'annual_income'=>$annual_income,
            'bonus_number'=>$bonus_number,
            'bonus_income'=>$bonus_income,
            'work_city'=>$work_city,
        ]);
        return redirect()->route('corporate.job-info-index');
    }

    public function edit(Request $request ,$id){
        $job_info=JobInfo::find($id);
        return view('corporate.top.job-info-edit',['job_info'=>$job_info]);
    }

    public function update(Request $request){
        $id=$request->input('id');
        $recruitment_job=$request->input('recruitment_job');
        $recruitment_position=$request->input('recruitment_position');
        $job_content=$request->input('job_content');
        $team_name=$request->input('team_name');
        $team_size=$request->input('team_size');
        $must_technology=$request->input('must_technology');
        $better_technology=$request->input('better_technology');
        $must_personality=$request->input('must_personality');
        $better_personality=$request->input('better_personality');
        $hire_number=$request->input('hire_number');
        $annual_income=$request->input('annual_income');
        $bonus_number=$request->input('bonus_number');
        $bonus_income=$request->input('bonus_income');
        $work_city=$request->input('work_city');

        $JobInfo=JobInfo::find($id);
        $JobInfo->recruitment_job=$recruitment_job;
        $JobInfo->recruitment_position=$recruitment_position;
        $JobInfo->job_content=$job_content;
        $JobInfo->team_name=$team_name;
        $JobInfo->team_size=$team_size;
        $JobInfo->must_technology=$must_technology;
        $JobInfo->better_technology=$better_technology;
        $JobInfo->must_personality=$must_personality;
        $JobInfo->better_personality=$better_personality;
        $JobInfo->hire_number=$hire_number;
        $JobInfo->annual_income=$annual_income;
        $JobInfo->bonus_number=$bonus_number;
        $JobInfo->bonus_income=$bonus_income;
        $JobInfo->work_city=$work_city;
        $JobInfo->save();
        return redirect()->route('corporate.job-info-index');
    }


}
