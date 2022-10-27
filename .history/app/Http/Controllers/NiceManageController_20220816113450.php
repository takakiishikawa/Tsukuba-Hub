<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\NiceManage;


class NiceManageController extends Controller
{
    public function count(){

    }
    public function keep(){

    }
    public function release(){

    }
    public function register(Request $request){
        return view('corporate.top.job-info-register',[]);
    }
}
