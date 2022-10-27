<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobInfo;



class JobInfoController extends Controller
{

    public function index(Request $request){
        $JobInfos=JobInfo::all();
        return view('corporate.top.job-info-index',['JobInfo'=>$JobInfo]);
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



}
