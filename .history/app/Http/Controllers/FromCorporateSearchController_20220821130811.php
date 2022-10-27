<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EngineerInfo;
use App\Models\EngineerRegistrationInfo;
use App\Models\NiceManage;
use App\Models\JobInfo;


class FromCorporateSearchController extends Controller
{
    public function index(Request $request){

        $keyword=$request->input('keyword');
        $keyword1=$request->input('keyword1');
        $keyword2=$request->input('keyword2');

        $query=JobInfo::query();

        if(!empty($keyword)) {
            $query->where('job_type',$keyword);
        }
        if(!empty($keyword1)) {
            $query->where('position',$keyword);
        }
        if(!empty($keyword2)) {
            $query->where('job_type',$keyword)
                ->orWhere('position',$keyword)
                ->orWhere('job_description','like',"%{$keyword}%");
        }

        $JobInfos=$query->get();
        return view('corporate.top.search',compact('JobInfos'));
    }

}

