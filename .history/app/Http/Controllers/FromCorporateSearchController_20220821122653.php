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
        $JobInfos=JobInfo::all();

        $keyword=$request->input('keyword');
        $query=JobInfo::query();

        if (!empty($keyword)){
            $query->Where('job_type')
                ->orWhere('position')
                ->orWhere('job_description);

        }




        return view('corporate.top.search',['JobInfos'=>$JobInfos]);
    }


}

