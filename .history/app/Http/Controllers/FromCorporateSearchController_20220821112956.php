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
        return view('corporate.top.search',['JobInfos'=>$Jobinfos]);
    }


}

