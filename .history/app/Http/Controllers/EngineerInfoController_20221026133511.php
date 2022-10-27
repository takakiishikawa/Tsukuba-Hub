<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineerInfo;
use Illuminate\Support\Facades\Auth;

class EngineerInfoController extends Controller
{
    public function index(){
        $user_id=Auth::user()->id;
        $engineer_info=EngineerInfo::where('user_id',$user_id)->get();
        return view('engineer.top.engineer-info-index',['engineer_info'=>$engineer_info]);
    }
    public function register(){
        return view('engineer.top.engineer-info-register');
    }
    public function create(Request $request){
        $user_id=Auth::user()->id;
        $age=$request->input('age');
        $address_city=$request->input('address_city');
        $objective=$request->input('objective');
        $work_experience=$request->input('work_experience');
        $work_experience_year=$request->input('work_experience_year');
        $development_language=$request->input('development_language');
        $development_framework=$request->input('development_framework');
        $development_os=$request->input('development_os');
        $development_database=$request->input('development_database');
        $development_infra=$request->input('development_infra');
        $expectation=$request->input('expectation');
        $strength=$request->input('strength');
        $interest=$request->input('interest');
        $video=$request->input('video');
        $uploadedImage=$request->file('image');
        $image=$uploadedImage->getClientOriginalName();
        $uploadedImage->storeAs('',$image);

        EngineerInfo::create([
            'user_id'=> $user_id,
            'age'=>$age,
            'address_city'=>$address_city,
            'objective'=>$objective,
            'work_experience'=>$work_experience,
            'work_experience_year'=>$work_experience_year,
            'development_language'=>$development_language,
            'development_framework'=>$development_framework,
            'development_os'=>$development_os,
            'development_database'=>$development_database,
            'development_infra'=>$development_infra,
            'expectation'=>$expectation,
            'strength'=>$strength,
            'interest'=>$interest,
            'video'=>$video,
            'image'=>$image,
        ]);

        return redirect()->route('engineer.engineer-info-index');
    }
    public function edit($id){
        $engineer_info=EngineerInfo::find($id);
        return view('engineer.top.engineer-info-edit',['engineer_info'=>$engineer_info]);
    }
    public function update(Request $request){
        $id=$request->input('id');
        $age=$request->input('age');
        $address_city=$request->input('address_city');
        $objective=$request->input('objective');
        $work_experience=$request->input('work_experience');
        $work_experience_year=$request->input('work_experience_year');
        $development_language=$request->input('development_language');
        $development_framework=$request->input('development_framework');
        $development_os=$request->input('development_os');
        $development_database=$request->input('development_database');
        $development_infra=$request->input('development_infra');
        $expectation=$request->input('expectation');
        $strength=$request->input('strength');
        $interest=$request->input('interest');
        $video=$request->input('video');
        $image=$request->input('image');



        $engineer_info=EngineerInfo::find($id);
        $engineer_info->age=$age;
        $engineer_info->address_city=$address_city;
        $engineer_info->objective=$objective;
        $engineer_info->work_experience=$work_experience;
        $engineer_info->work_experience_year=$work_experience_year;
        $engineer_info->development_language=$development_language;
        $engineer_info->development_framework=$development_framework;
        $engineer_info->development_os=$development_os;
        $engineer_info->development_database=$development_database;
        $engineer_info->development_infra=$development_infra;
        $engineer_info->expectation=$expectation;
        $engineer_info->strength=$strength;
        $engineer_info->interest=$interest;
        $engineer_info->video=$video;
        $engineer_info->image=$image;
        $engineer_info->save();
        return redirect()->route('engineer.engineer-info-index');
    }

}
