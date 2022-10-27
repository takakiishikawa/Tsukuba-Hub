<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobInfo;



class JobInfoController extends Controller
{

    public function index(Request $request){
        $JobInfos=JobInfo::all();
        return view('corporate.top.job-info-index',['JobInfos'=>$JobInfos]);
    }

    public function register(){
        return view('corporate.top.job-info-register',[]);
    }

    public function create(Request $request){
        $job_type=$request->input('job_type');
        $position=$request->input('position');
        $job_description=$request->input('job_description');
        JobInfo::create([
            'job_type'=>$job_type,
            'position'=>$position,
            'job_description'=>$job_description,
        ]);
        return redirect()->route('corporate.job-info-index');
    }

    public function edit(Request $request ,$id){
        $JobInfo=JobInfo::find($id);
        return view('corporate.top.job-info-edit',['JobInfo'=>$JobInfo]);
    }

    public function update(Request $request){
        $id=$request->input('id');
        $job_type=$request->input('job_type');
        $position=$request->input('position');
        $job_description=$request->input('job_description');

        $JobInfo=JobInfo::find($id);
        $JobInfo->job_type=$job_type;
        $JobInfo->position=$position;
        $JobInfo->Job_description=$Job_description;
        $JobInfo->save();
        return redirect()->route('corporate.job-info-index');
    }


}
