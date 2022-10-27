<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nice;


class NiceManageController extends Controller
{
    public function count(){

    }
    public function keep(){

    }
    public function release(){

    }
    public function indexCorporate(Request $request){
        return view('corporate.top.nice',[]);
    }
    public function indexEngineer(Request $request){
        return view('engineer.top.nice',[]);
    }


}
