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
    public function display(){
        return view('corporate.top.nice',[]);
    }
}
