<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobInfo;
use Illuminate\Support\Facades\Auth;

class JobInfoController extends Controller
{

    public function index(Request $request){
        $user_id=Auth::user()->id;
        $job_info=JobInfo::where('user_id',$user_id)->get();
        return view('corporate.top.job-info-index',['job_info'=>$job_info]);
    }

    public function register(){
        return view('corporate.top.job-info-register',[]);
    }

    public function create(Request $request){
        $user_id=Auth::user()->id;
        $job_type=$request->input('job_type');
        $position=$request->input('position');
        $job_description=$request->input('job_description');

        CorporateInfo::create([
            'user_id'=> $user_id,
            'job_type'=>$job_type,
            'position'=>$position,
            'job_description'=>$job_description,
        ]);
        return redirect()->route('corporate.corporate-info-index');
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
        $JobInfo->job_description=$job_description;
        $JobInfo->save();
        return redirect()->route('corporate.job-info-index');
    }


}
