<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\JobInfo;



class JobInfoController extends Controller
{

    public function index(Request $request){
        return view('corporate.top.job-info-index',[]);
    }
    public function register(){
        return view('corporate.top.job-info-register',[]);
    }


}
